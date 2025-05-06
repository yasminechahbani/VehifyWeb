<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Carte_grise;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'home'
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about/about.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'about'
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services/services.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'services'
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'contact'
        ]);
    }

    #[Route('/vin', name: 'app_vin')]
    public function vin(): Response
    {
        return $this->render('vin/vin.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'vin'
        ]);
    }

    #[Route('/vin/verify', name: 'app_vin_verify', methods: ['POST'])]
    public function verifyVin(Request $request, EntityManagerInterface $entityManager): Response
    {
        $numeroCarteGrise = $request->request->get('numeroCarteGrise');
        
        $carteGrise = $entityManager
            ->getRepository(Carte_grise::class)
            ->findOneBy(['numero_carte_grise' => $numeroCarteGrise]);
    
        return $this->render('vin/vin.html.twig', [
            'active_page' => 'vin',
            'carteGrise' => $carteGrise,
            'error' => $carteGrise ? null : 'Aucune carte grise trouvée avec ce numéro.'
        ]);
    }

    #[Route('/verif', name: 'app_verif')]
    public function verif(): Response
    {
        return $this->render('verif/visite.html.twig', [
            'controller_name' => 'HomeController',
            'active_page' => 'verif'
        ]);
    }

    #[Route('/verif/submit', name: 'app_verif_submit', methods: ['POST'])]
    public function verifSubmit(Request $request): Response
    {
        $checks = $request->request->get('checks', []);
        
        // Here you can handle the submitted checkboxes
        // For now, we'll just redirect back to the verification page
        return $this->redirectToRoute('app_verif');
    }
}
