<?php

namespace App\Controller;

use App\Entity\Permis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


#[Route('/about', name: 'app_about')]

public function about(EntityManagerInterface $entityManager): Response
{
    $permis = $entityManager
        ->getRepository(Permis::class)
        ->findAll();

    return $this->render('permis/index.html.twig', [
        'permis' => $permis,
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
}
