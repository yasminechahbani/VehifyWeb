<?php

namespace App\Controller;

use App\Entity\Service;
use App\Entity\Resultat;
use App\Entity\Rapport;
use App\Entity\Carte_grise;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use DateTimeImmutable;
use DateTime;
use Doctrine\DBAL\Connection;

class VisiteController extends AbstractController
{
    #[Route('/verif', name: 'app_verif')]
    public function index(Request $request, SessionInterface $session): Response
    {
        if ($request->query->get('updatePosition')) {
            $lat = $request->query->get('lat');
            $lng = $request->query->get('lng');
            
            $session->set('user_lat', $lat);
            $session->set('user_lng', $lng);
            
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['status' => 'updated']);
            }
        }
        
        return $this->render('verif/visite.html.twig', [
            'active_page' => 'verif'
        ]);
    }

    #[Route('/verif/submit', name: 'app_verif_submit', methods: ['POST'])]
    public function submit(Request $request, EntityManagerInterface $entityManager,SessionInterface $session): Response
    {
        $checks = $request->request->all('checks');
        
        $resultat = new Resultat();
        $rapport = new Rapport();
    
        $resultat->setDirection(in_array('direction', $checks));
        $resultat->setVisibilite(in_array('visibilite', $checks));
        $resultat->setCarrosorie(in_array('carrosserie', $checks));
        $resultat->setEclairage(in_array('eclairage', $checks));
        $resultat->setHuileDefault(in_array('huileDefault', $checks));
        $resultat->setEchappement(in_array('echappement', $checks));
        $resultat->setFreinage(in_array('freins', $checks));
        $resultat->setPneaumatique(in_array('pneaumatique', $checks));
        $resultat->setVinSaisie($session->get('vin'));

        $allValid = $resultat->getDirection() &&
                    $resultat->getVisibilite() &&
                    $resultat->getCarrosorie() &&
                    $resultat->getEclairage() &&
                    $resultat->getHuileDefault() &&
                    $resultat->getEchappement() &&
                    $resultat->getFreinage() &&
                    $resultat->getPneaumatique();
        $resultat->setStatus($allValid);
        $entityManager->persist($resultat);
        $entityManager->flush();

        $rapport->setDate(new \DateTime());
        $rapport->setDirection($request->request->get('direction_details'));
        $rapport->setVisibilite($request->request->get('visibilite_details'));
        $rapport->setCarrosorie($request->request->get('carrosserie_details'));
        $rapport->setEclairage($request->request->get('eclairage_details'));
        $rapport->setHuileDefault($request->request->get('huile_details'));
        $rapport->setEchappement($request->request->get('echappement_details'));
        $rapport->setFreinage($request->request->get('freins_details'));
        $rapport->setPneaumatique($request->request->get('pneaumatique_details'));
        $rapport->setId_resultat($resultat);
        $entityManager->persist($rapport);
        $entityManager->flush();

        // Generate PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($options);

        // Generate HTML content
        $html = $this->renderView('pdf_template/pdf_template.html.twig', [
            'resultat' => $resultat,
            'rapport' => $rapport,
            'date' => new DateTime()
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Generate unique filename
        $filename = sprintf('verification_technique_%s_%s.pdf', 
            $resultat->getId_resultat(),
            (new DateTime())->format('Y-m-d_H-i-s')
        );

        // Save PDF to file
        $pdfContent = $dompdf->output();
        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/uploads/pdf/';
        
        if (!file_exists($pdfPath)) {
            mkdir($pdfPath, 0777, true);
        }
        
        file_put_contents($pdfPath . $filename, $pdfContent);
        new Response(
            $pdfContent,
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename)
            ]
        );

        return $this->redirectToRoute('app_verif_check_vin');

        // Return PDF download response
    }
    #[Route('/services', name: 'app_serviceFClient')]
    public function services(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $sortBy = $request->query->get('sort', 'none');
        $userLat = $request->query->get('lat', $session->get('user_lat'));
        $userLng = $request->query->get('lng', $session->get('user_lng'));
    
        $services = $entityManager->getRepository(Service::class)->findAll();
    
        // Sort based on parameter
        if ($sortBy === 'price') {
            usort($services, function($a, $b) {
                return $a->getPrix() - $b->getPrix();
            });
        } elseif ($sortBy === 'distance' && $userLat && $userLng) {
            foreach ($services as $service) {
                $distance = $this->calculateDistance(
                    $userLat, 
                    $userLng,
                    $service->getLatitude(),
                    $service->getLongitude()
                );
                $service->distance = $distance;
            }
        usort($services, fn($a, $b) => $a->distance <=> $b->distance);
        }
    
        return $this->render('client aff/services.html.twig', [
            'services' => $services,
            'active_page' => 'services',
            'sortBy' => $sortBy
        ]);
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2): float
    {
        if (!$lat1 || !$lon1) return 0;

        $earthRadius = 6371; // Earth's radius in kilometers

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat/2) * sin($dLat/2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLon/2) * sin($dLon/2);

        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        return $earthRadius * $c;
    }

    #[Route('/verif/vin', name: 'app_verif_vin')]
    public function vinForm(): Response
    {
        return $this->render('vin/vin.html.twig', [
            'active_page' => 'verif'
        ]);
    }

    #[Route('/verif/check-vin', name: 'app_verif_check_vin', methods: ['GET', 'POST'])]
    public function checkVin(Request $request, Connection $connection,SessionInterface $session): Response
    {
        if ($request->isMethod('GET')) {
            return $this->render('vin/vin.html.twig', [
                'active_page' => 'verif',
                'showButton' => false
            ]);
        }

        $vin = $request->request->get('vin');
        
        // Création du QueryBuilder via la connexion DBAL
        $qb = $connection->createQueryBuilder();
        $qb->select('c.*, v.id_vehicule, r.idVehicule') 
            ->from('carte_grise', 'c')
            ->innerJoin('c', 'vehicule', 'v', 'c.id_carte_grise = v.id_carte_grise')
            ->leftJoin('v', 'reservation', 'r', 'v.id_vehicule = r.idVehicule') // Utilisation de LEFT JOIN
            ->where('c.numero_carte_grise = :vin')
            ->setParameter('vin', $vin);
        
        // Exécution de la requête et récupération du résultat
        $carteGriseData = $qb->executeQuery()->fetchAssociative();
        
        // Si aucune carte grise n'est trouvée
        if (!$carteGriseData) {
            return $this->render('vin/vin.html.twig', [
                'error' => 'Aucune carte grise trouvée avec ce numéro.',
                'active_page' => 'verif',
                'showButton' => false,
                'vin' => $vin
            ]);
        }
        
        // Filtrer les données pour ne pas inclure les colonnes id_ et vehicule_id
        $filteredCarteGriseData = [];
        foreach ($carteGriseData as $key => $value) {
            // Si la clé commence par 'id_' ou est 'vehicule_id', on l'ignore
            if (strpos($key, 'id_') === false && $key !== 'vehicule_id') {
                $filteredCarteGriseData[$key] = $value;
            }
        }
    
        // Vérification si la réservation est absente
        if (!isset($carteGriseData['idVehicule']) || !$carteGriseData['idVehicule']) {
            return $this->render('vin/vin.html.twig', [
                'error' => 'La carte grise existe, mais aucune réservation n\'est trouvée pour ce véhicule.',
                'active_page' => 'verif',
                'showButton' => false,
                'vin' => $vin
            ]);
        }
    
        // Si une carte grise et une réservation sont trouvées, on passe les données à la vue
        $session->set('vin', $vin);
        return $this->render('vin/vin.html.twig', [
            'carteGrise' => $filteredCarteGriseData, // Données filtrées de la carte grise récupérées
            'active_page' => 'verif',
            'showButton' => true,
            'vin' => $vin
        ]);
    }
    

}
