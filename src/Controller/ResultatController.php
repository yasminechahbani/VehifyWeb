<?php

namespace App\Controller;

use App\Entity\Resultat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/resultat')]
class ResultatController extends AbstractController
{
    #[Route('/', name: 'app_resultat_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $resultats = $entityManager
            ->getRepository(Resultat::class)
            ->findAll();

        return $this->render('resultat/index.html.twig', [
            'resultats' => $resultats,
        ]);
    }

    #[Route('/{id_resultat}', name: 'app_resultat_show')]
    public function show(int $id_resultat, EntityManagerInterface $entityManager): Response
    {
        $resultat = $entityManager
            ->getRepository(Resultat::class)
            ->find($id_resultat);

        if (!$resultat) {
            throw $this->createNotFoundException('Résultat non trouvé');
        }

        return $this->render('resultat/show.html.twig', [
            'resultat' => $resultat
        ]);
    }
}