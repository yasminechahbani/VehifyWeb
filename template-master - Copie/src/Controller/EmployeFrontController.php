<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Permis;
use Doctrine\ORM\EntityManagerInterface;

class EmployeFrontController extends AbstractController
{
    // src/Controller/EmployeFrontController.php

#[Route('/employeeFront/front', name: 'app_employe_front')]
public function index(EntityManagerInterface $entityManager): Response
{
    $permisRepo = $entityManager->getRepository(Permis::class);
    $permis = $permisRepo->findAll();
    
    $pendingRenewalCount = $permisRepo->countPendingRenewals();

    return $this->render('employe_front/index.html.twig', [
        'controller_name' => 'EmployeFrontController',
        'permis' => $permis,
        'pendingRenewalCount' => $pendingRenewalCount, // 👈 pass to Twig
    ]);        
}

    #[Route('/{id_permis}', name: 'app_show_permisOne', methods: ['GET'])]
public function show(Permis $permis): Response
{
    return $this->render('permis/show.html.twig', [
        'permi' => $permis,
    ]);
}
#[Route('/employeeFront/pending-renewals', name: 'app_pending_renewals')]
public function showPendingRenewals(EntityManagerInterface $entityManager): Response
{
    $pendingPermis = $entityManager->getRepository(Permis::class)
        ->createQueryBuilder('p')
        ->where('p.isRenewal = 1')
        ->andWhere('p.etat = :etat')
        ->setParameter('etat', 'Expired')
        ->getQuery()
        ->getResult();

    return $this->render('employe_front/pending_renewals.html.twig', [
        'pendingPermis' => $pendingPermis,
    ]);
}


}