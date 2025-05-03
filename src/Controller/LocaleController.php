<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocaleController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(string $locale, Request $request): Response
    {
        if (!in_array($locale, ['en', 'fr', 'ar'])) {
            throw $this->createNotFoundException('Locale not supported');
        }

        $request->getSession()->set('_locale', $locale);
        $request->setLocale($locale);

        $referer = $request->headers->get('referer');
        if (empty($referer)) {
            return $this->redirectToRoute('app_home');
        }

        return $this->redirect($referer);
    }
}