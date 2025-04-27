<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComponentController extends AbstractController
{
    #[Route('/components/avatars', name: 'app_avatars')]
    public function avatars(): Response
    {
        return $this->render('components/avatars.html.twig');
    }
}