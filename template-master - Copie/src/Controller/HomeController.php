<?php

namespace App\Controller;

use App\Repository\EmployeRepository; // Ajout de l'import manquant
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Employe;
use App\Entity\Equipement;
use App\Form\VehiculeType;
use App\Form\CarteGrise1Type;
use App\Entity\CarteGrise;
use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use App\Repository\CarteGriseRepository;
use App\Repository\EquipementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Permis;
use App\Entity\Quiz;
use App\Service\QuizApiClient;
use App\Entity\Service;
use App\Form\PermisType;
use App\Form\vehiculeTypeAdmin;
use App\Repository\QuizRepository;
class HomeController extends AbstractController
{
    

    #[Route('/dashboard', name: 'app_Admin')]
    public function index(EmployeRepository $employeRepository,VehiculeRepository $vehiculeRepo, CarteGriseRepository $carteGriseRepo,EquipementRepository $equipementRepository): Response
    {
        // Récupérer le nombre de véhicules
        $nombreVehicules = $vehiculeRepo->countVehicules([]);  // Utilise le repository pour compter les véhicules
        $nombreCartesGrises = $carteGriseRepo->countCartesGrises([]);
        $nombreVehiculesNonApprouves = $vehiculeRepo->countVehiculesNonApprouves([
            'statut' => 'Visite non faite',  // Statut des véhicules non approuvés
        ]);
        $nombreVehiculesApprouves = $vehiculeRepo->countVehiculesApprouves([
            'statut' => 'Visite faite',  // Filtrer par statut
        ]);
        // Récupérer tous les employés
        $employes = $employeRepository->findAll();
        
        // Initialiser les tranches d'âge
        $ageDistribution = [
            '18-25' => 0,
            '26-35' => 0,
            '36-45' => 0,
            '46-55' => 0,
            '56+' => 0
        ];
        
        // Calculer la répartition
        foreach ($employes as $employe) {
            $age = $employe->getAge();
            
            if ($age >= 18 && $age <= 25) {
                $ageDistribution['18-25']++;
            } elseif ($age >= 26 && $age <= 35) {
                $ageDistribution['26-35']++;
            } elseif ($age >= 36 && $age <= 45) {
                $ageDistribution['36-45']++;
            } elseif ($age >= 46 && $age <= 55) {
                $ageDistribution['46-55']++;
            } else {
                $ageDistribution['56+']++;
            }
        }
        $totalEmployees = $employeRepository->getTotalEmployes();
        $totalEquipements = $equipementRepository->getTotalEquipements();
        

        return $this->render('dashboard/index.html.twig', [
            'ageDistribution' => $ageDistribution,
            'nombreVehiculesApprouves' => $nombreVehiculesApprouves,
            'nombreVehiculesNonApprouves' => $nombreVehiculesNonApprouves,
            'nombreVehicules' => $nombreVehicules,
            'nombreCartesGrises' => $nombreCartesGrises,
            'totalEmployees' => $totalEmployees,
            'totalEquipements' => $totalEquipements,
            'ageDistribution' => $ageDistribution,
            
        ]);

         
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('forms/forms.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('tables/tables.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/components/avatars', name: 'app_avatars')]
    public function avatarsComponent(): Response
    {
        return $this->render('components/avatars.html.twig');
    }

    #[Route('/forms/forms', name: 'app_forms')]
    public function forms(): Response
    {
        return $this->render('forms/forms.html.twig');
    }

    #[Route('/employe/show', name: 'app_datatables')]
    public function datatables(): Response
    {
        return $this->render('tables/datatables.html.twig');
    }

    #[Route('/dashboard/liste', name: 'app_liste')]
    public function afficherVehicule(VehiculeRepository $vehiculeRepo, CarteGriseRepository $carteGriseRepo): Response
    {
        // Récupérer la liste des véhicules et des cartes grises
        $vehicules = $vehiculeRepo->findAll();
        $cartesGrises = $carteGriseRepo->findAll();

        return $this->render('BackOffice/liste/liste.html.twig', [
            'vehicules' => $vehicules,
            'cartesGrises' => $cartesGrises,
        ]);
    }










    //vehicule  DASHBOARD ADMIN

    #[Route('/dashboard/liste/vehicule/{idVehicule}', name: 'app_vehiculeB_show')]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('BackOffice/vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

// Dans le contrôleur CarteGriseController
    #[Route('/dashboard/liste/carte-grise/{idCarteGrise}', name: 'app_carte_griseB_show')]
    public function show1(CarteGrise $carteGrise): Response
    {
        return $this->render('BackOffice/carte_grise/show.html.twig', [
            'carte_grise' => $carteGrise,
        ]);
    }

    #[Route('/dashboard/ajout/vehicule', name: 'app_vehicule_add')]
    public function addVehicule(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si un véhicule avec la même immatriculation existe déjà
            $existingVehicule = $entityManager->getRepository(Vehicule::class)->findOneBy([
                'immatriculation' => $vehicule->getImmatriculation()
            ]);

            if ($existingVehicule) {
                // Si un véhicule avec la même immatriculation existe, afficher un message d'erreur
                $this->addFlash('error', 'Un véhicule avec cette immatriculation existe déjà.');
                return $this->redirectToRoute('app_vehicule_add'); // Rediriger vers le formulaire avec le message
            }

            // Vérifie si un véhicule est déjà associé à cette carte grise
            if ($vehicule->getCarteGrise() && $vehicule->getCarteGrise()->getVehicules()->count() > 0) {
                // Si la carte grise a déjà un véhicule, afficher un message d'erreur
                $this->addFlash('error', 'Cette carte grise est déjà associée à un véhicule.');
                return $this->redirectToRoute('app_vehicule_add'); // Rediriger vers le formulaire avec le message
            }

            // Sinon, persister le véhicule
            $entityManager->persist($vehicule);
            $entityManager->flush();

            // Message de succès
            $this->addFlash('success', 'Véhicule ajouté avec succès !');
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/vehicule/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Méthode d'ajout pour Carte Grise
    #[Route('/dashboard/ajout/carte-grise', name: 'app_carte_grise_add')]
    public function addCarteGrise(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carteGrise = new CarteGrise();
        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérification si une carte grise avec le même numéro existe déjà
            $existingCarteGrise = $entityManager->getRepository(CarteGrise::class)->findOneBy([
                'numeroCarteGrise' => $carteGrise->getNumeroCarteGrise()  // Remplace 'numero' par le nom exact du champ dans ta classe CarteGrise
            ]);

            if ($existingCarteGrise) {
                // Si une carte grise avec le même numéro existe, afficher un message d'erreur
                $this->addFlash('error', 'Le numéro de carte grise est déjà utilisé. Veuillez en choisir un autre.');

                return $this->redirectToRoute('app_carte_grise_add'); // Rediriger vers le formulaire avec le message d'erreur
            }

            // Si la carte grise est unique, persister la nouvelle carte grise
            $entityManager->persist($carteGrise);
            $entityManager->flush();

            $this->addFlash('success', 'Carte Grise ajoutée avec succès !');
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/carte_grise/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/dashboard/liste/carte-grise/delete/{idCarteGrise}', name: 'app_carte_griseB_delete', methods: ['POST'])]
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
    #[Route('/dashboard/liste/carte-grise/edit/{idCarteGrise}', name: 'app_carte_griseB_edit', methods: ['GET', 'POST'])]
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
        // Récupérer toutes les cartes grises
        $carteGrises = $entityManager->getRepository(CarteGrise::class)->findAll();
        
        $choices = [];
        foreach ($carteGrises as $carteGrise) {
            $choices[$carteGrise->getNumeroCarteGrise()] = $carteGrise;
        }

        // Créer le formulaire avec les choix de cartes grises
        $form = $this->createForm(VehiculeType::class, $vehicule, [
            'carte_grise_choices' => $choices
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Véhicule modifié avec succès.');
            return $this->redirectToRoute('app_liste');
        }

        return $this->render('BackOffice/vehicule/edit.html.twig', [
            'form' => $form->createView(),
            'vehicule' => $vehicule
        ]);
    }
}
