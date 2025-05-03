<?php

namespace App\Controller;
use App\Service\QuizApiClient;

use SessionIdInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Permis;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Quiz;
use App\Repository\PermisRepository;
use App\Repository\QuizRepository;
use App\Repository\ServiceRepository;
use App\Service\TwilioWhatsappService;


class userHomeController extends AbstractController
{
 // In the userHomeController

    #[Route('/home', name: 'app_home')]
    public function index(SessionInterface $session, EntityManagerInterface $entityManager,PermisRepository $permisRepository,
    TwilioWhatsappService $twilioWhatsappService): Response
    {
        $userId = $session->get('id');
        $expiryMessage = null;

        if (!$userId) {
            return $this->render('home/index.html.twig', [
                'controller_name' => 'HomeController',
                'active_page' => 'home',
            ]);
        }

        $quiz = $entityManager->getRepository(Quiz::class)->findOneBy(['idUser' => $userId]);
        $permis = null;

        if ($quiz && $quiz->getStatut() === 'Passed') {
            $permis = $entityManager->getRepository(Permis::class)->findOneBy(['idQuiz' => $quiz->getId()]);
            
            // Check if permis exists and handle expiration
            if ($permis) {
                $today = new \DateTime();
                $expiryDate = $permis->getDateExpiration();
                
                if ($expiryDate <= $today && $permis->getEtat() !== 'Expired') {
                    // Update permis status to expired
                    $permis->setEtat('Expired');
                    $permis->setIsRenewal(1);
                    
                    // Using WhatsApp template message format
                    $message = "Hello! This is an important notification about your driver's license.\n\n" .
                              "License Number: " . $permis->getNumeroPermis() . "\n" .
                              "Status: Expired\n" .
                              "Required Action: Please visit our office to renew your license.\n\n" .
                              "For assistance, reply with 'help'.";
                           
                   try {
                        $twilioWhatsappService->sendTemplateMessage('+21629423403', $message);
                    } catch (\Exception $e) {
                        error_log('WhatsApp notification failed: ' . $e->getMessage());
                    }
                    $entityManager->flush();
                    $expiryMessage = 'Your drivers license has expired! request renewal in the Mine Services';
                }
            }
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
            'permis' => $permis,
            'quiz' => $quiz,
            'active_page' => 'home',
            'expiryMessage' => $expiryMessage
        ]);
    }
 
    
#[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/services', name: 'app_services')]
 public function services(): Response
    {
        return $this->render('services/services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/contact', name: 'app_contact')]
 public function contact(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    

//permis Home  Controller

public function checkExpiredPermis(
    EntityManagerInterface $entityManager,
    PermisRepository $permisRepository,
    TwilioWhatsappService $twilioWhatsappService
): Response
{
    $today = new \DateTime();
    $allPermis = $permisRepository->findAll();
    $messagesSent = 0;

    foreach ($allPermis as $permis) {
        // Check if expiry date is today
        if ($permis->getDateExpiration() && $permis->getDateExpiration()->format('Y-m-d') === $today->format('Y-m-d')) {
            // Get owner's phone number
            $phoneNumber = 29423403;
             // Or wherever the phone number is stored
            if ($phoneNumber) {
                $message = "Your driver's license has expired today. Please renew it as soon as possible.";
                // Send WhatsApp
                $twilioWhatsappService->sendMessage('+216' . '29423403', $message);
                $messagesSent++;
            }
        }
    }

    return new Response("Checked expirations. WhatsApp messages sent: " . $messagesSent);
}
}
