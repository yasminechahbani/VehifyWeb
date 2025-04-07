<?php
// src/Controller/DashboardController.php
namespace App\Controller;

use App\Entity\CarteGrise;
use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use App\Repository\CarteGriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\VehiculeType;
use App\Form\CarteGrise1Type;
use Symfony\Component\HttpFoundation\Request;


class DashboardController extends AbstractController
{
    #[Route('/dashboard/liste', name: 'app_liste')]
    public function index(VehiculeRepository $vehiculeRepo, CarteGriseRepository $carteGriseRepo): Response
    {
        // Récupérer la liste des véhicules et des cartes grises
        $vehicules = $vehiculeRepo->findAll();
        $cartesGrises = $carteGriseRepo->findAll();

        // Passer les données à la vue
        return $this->render('BackOffice/liste/liste.html.twig', [
            'vehicules' => $vehicules,
            'cartesGrises' => $cartesGrises,
        ]);
    }
    #[Route('/dashboard', name: 'app_dashboard')]
    public function home(): Response
    {
        return $this->render('BackOffice/home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/dashboard/widget', name: 'app_widget')]
    public function widget(): Response
    {
        return $this->render('BackOffice/widgets/widget.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    // Dans le contrôleur VehiculeController
    #[Route('/dashboard/liste/vehicule/{idVehicule}', name: 'app_vehiculeB_show')]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('BackOffice/vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

// Dans le contrôleur CarteGriseController
    #[Route('/dashboard/liste/carte-grise/{idCarteGrise}', name: 'app_carte_grise_show')]
    public function show1(CarteGrise $carteGrise): Response
    {
        return $this->render('BackOffice/carte_grise/show.html.twig', [
            'carte_grise' => $carteGrise,
        ]);
    }

    #[Route('/dashboard/ajout/vehicule', name: 'app_vehicule_add')]
    public function addVehicule(Request $request,EntityManagerInterface $entityManager): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Utilisation de l'EntityManager injecté
            $entityManager->persist($vehicule);
            $entityManager->flush();

            $this->addFlash('success', 'Véhicule ajouté avec succès !');
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/vehicule/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Méthode d'ajout pour Carte Grise
    #[Route('/dashboard/ajout/carte-grise', name: 'app_carte_grise_add')]
    public function addCarteGrise(Request $request,EntityManagerInterface $entityManager): Response
    {
        $carteGrise = new CarteGrise();
        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Utilisation de l'EntityManager injecté
           $entityManager->persist($carteGrise);
           $entityManager->flush();

            $this->addFlash('success', 'Carte Grise ajoutée avec succès !');
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/carte_grise/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/dashboard/liste/carte-grise/delete/{idCarteGrise}', name: 'app_carte_grise_delete', methods: ['POST'])]
    public function deleteCarteGrise(int $idCarteGrise, EntityManagerInterface $entityManager): RedirectResponse
    {
        // Trouver la carte grise par son ID
        $carteGrise = $entityManager->getRepository(CarteGrise::class)->find($idCarteGrise);

        // Vérifier si la carte grise existe
        if (!$carteGrise) {
            $this->addFlash('error', 'Carte grise non trouvée.');
            return $this->redirectToRoute('app_liste');
        }

        // Supprimer la carte grise
        $entityManager->remove($carteGrise);
        $entityManager->flush(); // Appliquer les changements dans la base de données

        // Ajouter un message flash de succès
        $this->addFlash('success', 'Carte grise supprimée avec succès.');

        // Rediriger vers la liste des cartes grises
        return $this->redirectToRoute('app_liste');
    }
    #[Route('/dashboard/liste/vehicule/delete/{idVehicule}', name: 'app_vehiculeB_delete', methods: ['POST'])]
    public function deleteVehicule(int $idVehicule, EntityManagerInterface $entityManager): RedirectResponse
    {
        // Trouver le véhicule par son ID
        $vehicule = $entityManager->getRepository(Vehicule::class)->find($idVehicule);

        // Vérifier si le véhicule existe
        if (!$vehicule) {
            $this->addFlash('error', 'Véhicule non trouvé.');
            return $this->redirectToRoute('app_liste');
        }

        // Supprimer le véhicule
        $entityManager->remove($vehicule);
        $entityManager->flush(); // Appliquer les changements dans la base de données

        // Ajouter un message flash de succès
        $this->addFlash('success', 'Véhicule supprimé avec succès.');


        // Rediriger vers la liste des véhicules
        return $this->redirectToRoute('app_liste');
    }
    // Méthode de modification pour Carte Grise
    #[Route('/dashboard/liste/carte-grise/edit/{idCarteGrise}', name: 'app_carte_grise_edit', methods: ['GET', 'POST'])]
    public function editCarteGrise(CarteGrise $carteGrise, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Création du formulaire de modification pour la carte grise
        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder les changements dans la base de données
            $entityManager->flush();

            // Message de succès
            $this->addFlash('success', 'Carte grise modifiée avec succès.');

            // Redirection vers la liste
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/carte_grise/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
// Méthode de modification pour Véhicule
    #[Route('/dashboard/liste/vehicule/edit/{idVehicule}', name: 'app_vehiculeB_edit', methods: ['GET', 'POST'])]
    public function editVehicule(Vehicule $vehicule, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Création du formulaire de modification pour le véhicule
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder les changements dans la base de données
            $entityManager->flush();

            // Message de succès
            $this->addFlash('success', 'Véhicule modifié avec succès.');

            // Redirection vers la liste
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/vehicule/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
