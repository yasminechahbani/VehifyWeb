<?php

namespace App\Controller;

use App\Entity\Permis;
use App\Entity\Service;
use App\Entity\Employe;
use App\Form\PermisType;
use App\Repository\PermisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/permis')]

class PermisController extends AbstractController
{

    #[Route('/', name: 'app_permis_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $permis = $entityManager
            ->getRepository(Permis::class)
            ->findAll();

        return $this->render('permis/index.html.twig', [
            'permis' => $permis,
        ]);
    }

    #[Route('/new', name: 'app_permis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $permis = new Permis();

        // Set default state
        $permis->setEtat('Active');

        // Set relationships - you may want to modify this based on your business logic
        $service = $entityManager->getRepository(Service::class)->find(1);
        $employe = $entityManager->getRepository(Employe::class)->find(1);

        if ($service) {
            $permis->setIdService($service);
        }
        if ($employe) {
            $permis->setIdEmploye($employe);
        }

        $form = $this->createForm(PermisType::class, $permis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($permis);
            $entityManager->flush();

            $this->addFlash('success', 'Permis créé avec succès');
            return $this->redirectToRoute('app_permis_index');
        }

        return $this->render('permis/new.html.twig', [
            'permis' => $permis,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_permis}', name: 'app_permis_show', methods: ['GET'])]
    public function show(Permis $permis): Response
    {
        return $this->render('permis/show.html.twig', [
            'permi' => $permis,
        ]);
    }

    #[Route('/{id_permis}/edit', name: 'app_permis_edit2', methods: ['GET', 'POST'])]
    public function edit(Request $request, Permis $permis, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PermisType::class, $permis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Automatically update expiration date if delivery date changed
            if ($form->get('date_delivrance')->isSubmitted()) {
                $permis->setDateDelivrance($permis->getDateDelivrance());
            }

            $entityManager->flush();

            $this->addFlash('success', 'Permis mis à jour avec succès');
            return $this->redirectToRoute('app_about_permisAll');
        }

        return $this->render('permis/edit.html.twig', [
            'permi' => $permis,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_permis}', name: 'app_permis_delete', methods: ['POST'])]
    public function delete(Request $request, Permis $permis, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$permis->getIdPermis(), $request->request->get('_token'))) {
            $entityManager->remove($permis);
            $entityManager->flush();
            $this->addFlash('success', 'Permis supprimé avec succès');
        }

        return $this->redirectToRoute('app_about_permisAll');
    }

}