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

class userHomeController extends AbstractController
{
 // In the userHomeController

#[Route('/home', name: 'app_home')]
public function index(SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    $userId = $session->get('id');

    // Retrieve the Quiz associated with the user
    $quiz = $entityManager->getRepository(Quiz::class)->findOneBy(['idUser' => $userId]);

    if (!$quiz) {
        $this->addFlash('warning', 'No quiz found for the current user.');
        return $this->redirectToRoute('app_home');
    }

    // Retrieve the Permis associated with the found Quiz
    $permis = $entityManager->getRepository(Permis::class)->findOneBy(['idQuiz' => $quiz->getId()]);

    if (!$permis) {
        $this->addFlash('warning', 'You do not have a Permis yet.');
        return $this->redirectToRoute('app_home');
    }

    // Set the active page (for example, on the home page)
    $activePage = 'home';

    return $this->render('home/index.html.twig', [
        'controller_name' => 'HomeController',
        'nom' => $session->get('nom'),
        'prenom' => $session->get('prenom'),
        'permis' => $permis,
        'active_page' => $activePage,  // Pass the active page to the template
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


}
