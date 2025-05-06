<?php
// src/Service/PermisGenerationService.php
// src/Service/PermisGenerationService.php
namespace App\Service;

use App\Entity\Permis;
use App\Entity\Quiz;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class PermisGenerationService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function canGeneratePermis(Quiz $quiz): bool
    {
        return $quiz->getScore() >= 7 && !$this->hasExistingPermis($quiz);
    }

    public function generatePermis(User $user, Quiz $quiz, array $additionalData = []): Permis
    {
        if (!$this->canGeneratePermis($quiz)) {
            throw new \RuntimeException('Cannot generate permis - quiz requirements not met');
        }

        $permis = new Permis();

        // Set required fields
        $permis->setNumeroPermis($this->generatePermisNumber());
        $permis->setDateDelivrance(new \DateTime());
        $permis->setEtat('Active');

        // Set relationships (using your existing structure)
        $permis->setIdUser($user); // Assuming you have this method

        // Store quiz reference in a non-relationship field
        $permis->setComment("Generated from Quiz #".$quiz->getId());

        // Set additional data if provided
        if (isset($additionalData['categorie'])) {
            $permis->setCategorie($additionalData['categorie']);
        }

        // Set default service/employee if needed
        $defaultService = $this->entityManager->getRepository(Service::class)->find(1);
        if ($defaultService) {
            $permis->setIdService($defaultService);
        }

        $this->entityManager->persist($permis);
        $this->entityManager->flush();

        return $permis;
    }

    private function hasExistingPermis(Quiz $quiz): bool
    {
        // Check if any permis references this quiz in its comment
        return (bool) $this->entityManager
            ->getRepository(Permis::class)
            ->createQueryBuilder('p')
            ->where('p.comment LIKE :quizRef')
            ->setParameter('quizRef', '%Quiz #'.$quiz->getId().'%')
            ->getQuery()
            ->getOneOrNullResult();
    }

    private function generatePermisNumber(): string
    {
        // Generate a random 10-digit number
        return str_pad(mt_rand(1, 9999999999), 10, '0', STR_PAD_LEFT);
    }
}
?>