<?php

namespace App\Controller;

use App\Entity\Equipement;
use App\Form\EquipementType;
use App\Repository\EquipementRepository;
use App\Service\IaGuideService; // Assurez-vous d'importer le service
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Endroid\QrCode\Builder\BuilderInterface;
 use Dompdf\Dompdf;
 use Dompdf\Options;
 // Importez l'interface du Builder

#[Route('/equipement')]
class EquipementController extends AbstractController
{
    #[Route('/', name: 'app_equipement_index', methods: ['GET'])]
    public function index(EquipementRepository $equipementRepository): Response
    {
        return $this->render('equipement/index.html.twig', [
            'equipements' => $equipementRepository->findAll(),
        ]);
    }

    #[Route('/stats', name: 'equipement_stats', methods: ['GET'])]
    public function stats(EquipementRepository $equipementRepository): Response
    {
        $equipements = $equipementRepository->findAll();
        
        // Calculate statistics
        $totalEquipements = count($equipements);
        $categoriesCount = [];
        $etatsCount = [];
        
        foreach ($equipements as $equipement) {
            // Count by category
            $categorie = $equipement->getCategorie();
            if (!isset($categoriesCount[$categorie])) {
                $categoriesCount[$categorie] = 0;
            }
            $categoriesCount[$categorie]++;
            
            // Count by state
            $etat = $equipement->getEtat();
            if (!isset($etatsCount[$etat])) {
                $etatsCount[$etat] = 0;
            }
            $etatsCount[$etat]++;
        }

        return $this->render('equipement/stats.html.twig', [
            'totalEquipements' => $totalEquipements,
            'categoriesCount' => $categoriesCount,
            'etatsCount' => $etatsCount,
            
        ]);
    }

    //Remove or comment out the /page route since we're using index instead
    /*
    #[Route('/page', name: 'app_equipement_page', methods: ['GET'])]
    public function equipementPage(EquipementRepository $equipementRepository): Response
    {
        $equipements = $equipementRepository->findAll();
        return $this->render('equipement/page.html.twig', [
            'equipements' => $equipements,
        ]);
    }
    */

    #[Route('/new', name: 'app_equipement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, IaGuideService $iaGuide): Response
    {
        $equipement = new Equipement();
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipement);
            $entityManager->flush();

            $guide = $iaGuide->generateGuide(
                $equipement->getNom(),
                $equipement->getCategorie(),
                $equipement->getDescription()
            );
           


            $equipement->setGuideUtilisation($guide);
            $entityManager->persist($equipement);
            $entityManager->flush();

            return $this->redirectToRoute('app_equipement_show', ['idEquipement' => $equipement->getIdEquipement()]);
        }

        return $this->render('equipement/new.html.twig', [
            'equipement' => $equipement,
            'form' => $form->createView(),
        ]);
    }

    // Fix the order of routes with parameters
    #[Route('/{idEquipement}/edit', name: 'app_equipement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipement/edit.html.twig', [
            'equipement' => $equipement,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idEquipement}/guide/pdf', name: 'app_equipement_guide_pdf', methods: ['GET'])]
    public function generatePdfGuide(Equipement $equipement): Response
    {
        $guideContent = $equipement->getGuideUtilisation();
       
        if (!$guideContent) {
            $this->addFlash('warning', 'Le guide d\'utilisation pour cet équipement est vide.');
            return $this->redirectToRoute('app_equipement_show', ['idEquipement' => $equipement->getIdEquipement()]);
        }

        $dompdf = new \Dompdf\Dompdf();

        $html = '<h1>Guide d\'utilisation - ' . $equipement->getNom() . '</h1>';
        $html .= '<p>' . nl2br($guideContent) . '</p>';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $pdfOutput = $dompdf->output();

        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/pdf/guide_' . $equipement->getIdEquipement() . '.pdf';
        file_put_contents($pdfPath, $pdfOutput);

        return $this->redirect('/pdf/guide_' . $equipement->getIdEquipement() . '.pdf');
    }

    #[Route('/{idEquipement}/guide', name: 'app_equipement_guide', methods: ['GET'])]
    public function showGuide(Equipement $equipement): Response
    {
        return $this->render('equipement/show_guide.html.twig', [
            'equipement' => $equipement,
            'guideContent' => nl2br($equipement->getGuideUtilisation()), // Passer le contenu formaté pour l'HTML
        ]);
    }

    // Move these routes to the end
    #[Route('/{idEquipement}', name: 'app_equipement_show', methods: ['GET'])]
    public function show(Equipement $equipement): Response
    {
        return $this->render('equipement/show.html.twig', [
            'equipement' => $equipement,
        ]);
    }

    #[Route('/{idEquipement}', name: 'app_equipement_delete', methods: ['POST'])]
    public function delete(Request $request, Equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipement->getIdEquipement(), $request->request->get('_token'))) {
            $entityManager->remove($equipement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipement_index', [], Response::HTTP_SEE_OTHER);
    }
}