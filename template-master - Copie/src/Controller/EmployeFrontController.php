<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Permis;
use Doctrine\ORM\EntityManagerInterface;

class EmployeFrontController extends AbstractController
{
    #[Route('/employeeFront/front', name: 'app_employe_front')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $permis = $entityManager
        ->getRepository(Permis::class)
        ->findAll();
        return $this->render('employe_front/index.html.twig', [
            'controller_name' => 'EmployeFrontController',
            'permis' => $permis,
        ]);        
    }
    #[Route('/{id_permis}', name: 'app_show_permisOne', methods: ['GET'])]
public function show(Permis $permis): Response
{
    return $this->render('permis/show.html.twig', [
        'permi' => $permis,
    ]);
}

}