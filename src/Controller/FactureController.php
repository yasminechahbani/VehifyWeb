<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Form\FactureType;
use App\Repository\FactureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/facture')]
class FactureController extends AbstractController
{
    #[Route('/', name: 'app_facture_index', methods: ['GET'])]
    public function index(FactureRepository $factureRepository): Response
    {
        return $this->render('facture/index.html.twig', [
            'factures' => $factureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_facture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $facture = new Facture();
        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Générer un numéro de facture unique si non fourni
            if (!$facture->getNumeroFacture()) {
                $facture->setNumeroFacture('FACT-' . date('YmdHis') . '-' . rand(1000, 9999));
            }
            
            $entityManager->persist($facture);
            $entityManager->flush();

            $this->addFlash('success', 'Facture créée avec succès!');

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('facture/new.html.twig', [
            'facture' => $facture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_facture_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    {
        $facture = $entityManager->getRepository(Facture::class)->find($id);

        if (!$facture) {
            throw $this->createNotFoundException('Facture non trouvée.');
        }

        return $this->render('facture/show.html.twig', [
            'facture' => $facture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_facture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $facture = $entityManager->getRepository(Facture::class)->find($id);

        if (!$facture) {
            throw $this->createNotFoundException('Facture non trouvée.');
        }

        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Facture mise à jour avec succès!');

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('facture/edit.html.twig', [
            'facture' => $facture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_facture_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $facture = $entityManager->getRepository(Facture::class)->find($id);

        if (!$facture) {
            throw $this->createNotFoundException('Facture non trouvée.');
        }

        if ($this->isCsrfTokenValid('delete'.$facture->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($facture);
                $entityManager->flush();
                $this->addFlash('success', 'Facture supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Impossible de supprimer la facture. Veuillez réessayer.');
            }
        }

        return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/reservation/{id}', name: 'app_facture_by_reservation', methods: ['GET'])]
    public function showByReservation(int $id, FactureRepository $factureRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $entityManager->getRepository('App:Reservation')->find($id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée.');
        }
        
        $factures = $factureRepository->findByReservation($reservation);
        
        return $this->render('facture/by_reservation.html.twig', [
            'factures' => $factures,
            'reservation' => $reservation,
        ]);
    }
}