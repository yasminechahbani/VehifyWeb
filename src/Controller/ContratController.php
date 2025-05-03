<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/', name: 'app_contrat_index', methods: ['GET'])]
public function index(ContratRepository $contratRepository): Response
{
    $contrats = $contratRepository->findAll();

    // Formulaire d’ajout (seulement créer le formulaire ici)
    $form = $this->createForm(ContratType::class);

    // Création des formulaires d’édition pour chaque contrat
    $editForms = [];
    foreach ($contrats as $contrat) {
        $editForm = $this->createForm(ContratType::class, $contrat, [
            'action' => $this->generateUrl('app_contrat_edit', ['id' => $contrat->getIdContrat()])
        ]);
        $editForms[$contrat->getIdContrat()] = $editForm->createView();
    }

    return $this->render('contrat/index.html.twig', [
        'contrats' => $contrats,
        'form' => $form->createView(),
        'edit_forms' => $editForms,
    ]);
}

#[Route('/new', name: 'app_contrat_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $contrat = new Contrat();
    $form = $this->createForm(ContratType::class, $contrat);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($contrat);
        $em->flush();

        $this->addFlash('success', 'Contrat ajouté avec succès !');

        return $this->redirectToRoute('app_contrat_index');
    }

    return $this->render('contrat/new.html.twig', [
        'form' => $form->createView(),
    ]);
}



    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        return $this->render('contrat/index.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_contrat_edit', methods: ['POST'])]
    public function edit(Request $request, Contrat $contrat, EntityManagerInterface $em): Response
    {
        // Add this near the top of your action method
        set_time_limit(300); // Increases timeout to 5 minutes
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Contrat mis à jour avec succès.');
        }

        return $this->redirectToRoute('app_contrat_index');
    }

    #[Route('/{id}', name: 'app_contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $contrat->getIdContrat(), $request->request->get('_token'))) {
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('app_contrat_index');
    }

    #[Route('/{id}/generate-pdf', name: 'app_contrat_generate_pdf', methods: ['GET'])]
    public function generateProfessionalPDF(Contrat $contrat): Response
    {
        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        // Initialize Dompdf
        $dompdf = new Dompdf($options);

        // Generate HTML content
        $html = $this->renderView('contrat/contract_pdf.html.twig', [
            'contrat' => $contrat
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Generate PDF
        $pdfContent = $dompdf->output();
        
        // Create response
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="contrat-'.$contrat->getIdContrat().'.pdf"');

        return $response;
    }
}