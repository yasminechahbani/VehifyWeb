<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\VehiculeRepository;
use App\Repository\CarteGriseRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('FrontOffice/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('FrontOffice/about/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/services', name: 'app_services')]
 public function services(): Response
    {
        return $this->render('FrontOffice/services/services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/contact', name: 'app_contact')]
 public function contact(): Response
    {
        return $this->render('FrontOffice/contact/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/back', name: 'app_back')]
    public function home(): Response
    {
        return $this->render('BackOffice/home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/back/widget', name: 'app_widget')]
    public function widget(): Response
    {
        return $this->render('BackOffice/widgets/widget.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
