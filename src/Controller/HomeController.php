<?php

namespace App\Controller;

use App\Repository\EmployeRepository; // Ajout de l'import manquant
use App\Repository\EquipementRepository; // Si vous avez un repository pour Equipement
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Employe;
//use App\Entity\Equipement;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EmployeRepository $employeRepository,EquipementRepository $equipementRepository): Response
    {
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
        
        // Calculer la répartition des âges
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

        // Récupérer le total des employés
        $totalEmployees = $employeRepository->getTotalEmployes();  // Ajout des parenthèses pour appeler la méthode

        // Récupérer le total des équipements
        $totalEquipements = $equipementRepository->getTotalEquipements(); // Ajouter la méthode dans EquipementRepository

        // Passer les données à la vue
        return $this->render('home/index.html.twig', [
            'totalEmployees' => $totalEmployees,
            'totalEquipements' => $totalEquipements, // Passer aussi les équipements à la vue
            'ageDistribution' => $ageDistribution // Passer la répartition des âges à la vue
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

    #[Route('/new', name: 'app_employe_new')]
    public function new(): Response
    {
        return $this->render('employe/new.html.twig');
    }
}
