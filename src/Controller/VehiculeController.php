<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\CarteGrise;
use App\Repository\CarteGriseRepository;

#[Route('/vehicule')]
final class VehiculeController extends AbstractController
{
    #[Route(name: 'app_vehicule_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $user = $session->get('id');
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_home');
        }
        $carteGrises = $entityManager->getRepository(CarteGrise::class)->findBy(['user' => $user]);
        $vehicules = $entityManager->getRepository(Vehicule::class)->findBy(['carteGrise' => $carteGrises]);
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }
    #[Route('/new', name: 'app_vehicule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        $user = $session->get('id');
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_home');
        }

        $carteGrises = $em->getRepository(CarteGrise::class)->findBy(['user' => $user]);
       
        // Transform carteGrises into choices array
        $choices = [];
        foreach ($carteGrises as $carteGrise) {
            $choices[$carteGrise->getNumeroCarteGrise()] = $carteGrise;
        }
       
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule, [
            'carte_grise_choices' => $choices
        ]);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si un véhicule avec la même immatriculation existe déjà
            $existingVehicule = $em->getRepository(Vehicule::class)->findOneBy([
                'immatriculation' => $vehicule->getImmatriculation()
            ]);

            if ($existingVehicule) {
                $this->addFlash('error', 'Un véhicule avec cette immatriculation existe déjà.');
                return $this->redirectToRoute('app_vehicule_new');
            }

            $carteGrise = $vehicule->getCarteGrise();
            if ($carteGrise && $carteGrise->getVehicules()->count() > 0) {
                $this->addFlash('error', 'Cette carte grise est déjà associée à un véhicule.');
                return $this->redirectToRoute('app_vehicule_new');
            }

           

            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('app_vehicule_index');
        }

        return $this->render('vehicule/new.html.twig', [
            'form' => $form->createView()
           
        ]);
    }


    #[Route('/{idVehicule}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/{idVehicule}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager,SessionInterface $session): Response
    {
        $user = $session->get('id');
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_home');
        }

        $carteGrises = $entityManager->getRepository(CarteGrise::class)->findBy(['user' => $user]);
        
        // Transform carteGrises into choices array
        $choices = [];
        foreach ($carteGrises as $carteGrise) {
            $choices[$carteGrise->getNumeroCarteGrise()] = $carteGrise;
        }
        $form = $this->createForm(VehiculeType::class, $vehicule, [
            'carte_grise_choices' => $choices
        ]);
                $form->handleRequest(request: $request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{idVehicule}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdVehicule(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }


        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }


}
