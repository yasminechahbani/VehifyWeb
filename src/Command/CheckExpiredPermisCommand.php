<?php
// src/Command/CheckExpiredPermisCommand.php
namespace App\Command;

use App\Repository\PermisRepository;
use App\Service\TwilioWhatsappService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:check-expired-permis',
    description: 'Checks for expired permits and sends WhatsApp notifications',
)]
class CheckExpiredPermisCommand extends Command
{
    private $permisRepository;
    private $twilioService;

    public function __construct(PermisRepository $permisRepository, TwilioWhatsappService $twilioService)
    {
        parent::__construct();
        $this->permisRepository = $permisRepository;
        $this->twilioService = $twilioService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Checking for expired permits...');

        $today = new \DateTime();

        // Find permits that expire today or have already expired
        $expiredPermis = $this->permisRepository->findExpiredPermis($today);

        if (count($expiredPermis) === 0) {
            $io->success('No expired permits found.');
            return Command::SUCCESS;
        }

        $io->info(sprintf('Found %d expired permit(s)', count($expiredPermis)));

        $sentCount = 0;
        $failedCount = 0;

        foreach ($expiredPermis as $permis) {
            $phoneNumber = $permis->getIdEmploye()->getTelephone();

            if (!$phoneNumber) {
                $io->warning(sprintf('No phone number found for permit #%s', $permis->getNumeroPermis()));
                $failedCount++;
                continue;
            }

            try {
                // Format the expiration date
                $expirationDate = $permis->getDateExpiration()->format('d/m/Y');

                // Create a personalized message
                $message = sprintf(
                    "Hello %s, your permit #%s has expired on %s. Please contact your administrator to renew it as soon as possible.",
                    $permis->getIdEmploye()->getNom(),
                    $permis->getNumeroPermis(),
                    $expirationDate
                );

                // Send WhatsApp message
                $this->twilioService->sendMessage('+216' . $phoneNumber, $message);

                // Update permit status to "Expired" if not already
                if ($permis->getEtat() !== 'Expired') {
                    $permis->setEtat('Expired');
                    $this->permisRepository->save($permis, true);
                }

                $io->text(sprintf('Notification sent to %s (+216%s)', $permis->getIdEmploye()->getNom(), $phoneNumber));
                $sentCount++;

            } catch (\Exception $e) {
                $io->error(sprintf(
                    'Failed to send notification for permit #%s: %s',
                    $permis->getNumeroPermis(),
                    $e->getMessage()
                ));
                $failedCount++;
            }
        }

        $io->success(sprintf('Sent %d notification(s), %d failed', $sentCount, $failedCount));

        return Command::SUCCESS;
    }
}