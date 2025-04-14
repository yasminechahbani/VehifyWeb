<?php

namespace App\Controller;

use App\Entity\Resultat;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisiteController extends AbstractController
{
    #[Route('/verif', name: 'app_verif')]
    public function index(): Response
    {
        return $this->render('verif/visite.html.twig', [
            'active_page' => 'verif'
        ]);
    }

    #[Route('/verif/submit', name: 'app_verif_submit', methods: ['POST'])]
    public function submit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $checks = $request->request->all('checks');
        
        $resultat = new Resultat();
        $resultat->setDirection(in_array('direction', $checks));
        $resultat->setVisibilite(in_array('visibilite', $checks));
        $resultat->setCarrosorie(in_array('carrosserie', $checks));
        $resultat->setEclairage(in_array('eclairage', $checks));
        $resultat->setHuileDefault(in_array('huile', $checks));
        $resultat->setEchappement(in_array('echappement', $checks));
        $resultat->setFreinage(in_array('freins', $checks));
        $resultat->setPneaumatique(in_array('pneaumatique', $checks));
        
        // Set default values for required fields
        $resultat->setVinSaisie('N/A'); // You might want to add this to your form
        $resultat->setStatus(false);
        
        // Set service ID if required
        // $resultat->setId_service($service); // Uncomment and set appropriate service
    
        $entityManager->persist($resultat);
        $entityManager->flush();
    
        $this->addFlash('success', 'La vérification a été enregistrée avec succès.');
        return $this->redirectToRoute('app_verif');
    }

    #[Route('/verif/resultats', name: 'app_resultat_index')]
    public function resultats(EntityManagerInterface $entityManager): Response
    {
        $resultats = $entityManager
            ->getRepository(Resultat::class)
            ->findAll();

        return $this->render('verif/resultats.html.twig', [
            'resultats' => $resultats,
            'active_page' => 'verif'
        ]);
    }

    #[Route('/verif/pdf/{id}', name: 'app_resultat_pdf')]
    public function generatePdf(Resultat $resultat): Response
    {
        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        // Initialize Dompdf
        $dompdf = new Dompdf($options);

        // Generate HTML content
        $html = $this->renderView('verif/pdf_template.html.twig', [
            'resultat' => $resultat,
            'date' => new \DateTime()
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Generate PDF filename
        $filename = "verification_technique_" . $resultat->getId_resultat() . ".pdf";

        // Send the generated PDF to the browser
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"'
            ]
        );
    }
}
