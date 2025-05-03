<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    #[Route('/diagnostic', name: 'app_diagnostic')]
    public function diagnostic(): Response
    {
        return $this->render('chatbot/_diagnostic.html.twig', [
            'active_page' => 'diagnostic'
        ]);
    }
}