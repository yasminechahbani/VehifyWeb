<?php

namespace App\Controller;

use App\Repository\EmployeRepository; 
use App\Repository\EquipementRepository; 
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
        
        $employes = $employeRepository->findAll();
        
        
        $ageDistribution = [
            '18-25' => 0,
            '26-35' => 0,
            '36-45' => 0,
            '46-55' => 0,
            '56+' => 0
        ];
        
        
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

        
        return $this->render('home/index.html.twig', [
            'totalEmployees' => $totalEmployees,
            'totalEquipements' => $totalEquipements, 
            'ageDistribution' => $ageDistribution 
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

    
}
