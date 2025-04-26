<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Service;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalendrierController extends AbstractController
{
    #[Route('/calendrier', name: 'app_calendrier')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les services pour le filtre
        $services = $entityManager->getRepository(Service::class)->findAll();
        
        return $this->render('calendrier/index.html.twig', [
            'controller_name' => 'CalendrierController',
            'services' => $services,
        ]);
    }
    
    #[Route('/calendrier/events', name: 'app_calendrier_events', methods: ['GET'])]
    public function getEvents(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Récupérer le paramètre de filtre de service (si présent)
        $serviceId = $request->query->get('service');
        
        // Créer la requête de base
        $queryBuilder = $entityManager->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->leftJoin('r.serviceId', 's')
            ->leftJoin('r.vehiculeId', 'v')
            ->leftJoin('r.userId', 'u')
            ->addSelect('s', 'v', 'u');
            
        // Appliquer le filtre de service si présent
        if ($serviceId) {
            $queryBuilder->andWhere('r.serviceId = :serviceId')
                ->setParameter('serviceId', $serviceId);
        }
        
        $reservations = $queryBuilder->getQuery()->getResult();
        
        $events = [];
        foreach ($reservations as $reservation) {
            $service = $reservation->getServiceId();
            $user = $reservation->getUserId();
            $vehicule = $reservation->getVehiculeId();
            
            // Déterminer la couleur en fonction du type de service
            $color = '#3788d8'; // Couleur par défaut
            if ($service) {
                switch ($service->getType()) {
                    case 'Réparation':
                        $color = '#e74a3b'; // Rouge
                        break;
                    case 'Entretien':
                        $color = '#1cc88a'; // Vert
                        break;
                    case 'Diagnostic':
                        $color = '#f6c23e'; // Jaune
                        break;
                    case 'Lavage':
                        $color = '#36b9cc'; // Bleu clair
                        break;
                }
            }
            
            // Formater la date et l'heure pour FullCalendar
            $date = $reservation->getDateReservation()->format('Y-m-d');
            $heure = $reservation->getHeureReservation();
            
            $events[] = [
                'id' => $reservation->getId(),
                'title' => ($service ? $service->getNom() . ' - ' : '') . 
                           ($user ? $user->getNom() . ' ' . $user->getPrenom() : 'Client'),
                'start' => $date . 'T' . $heure,
                'color' => $color,
                'extendedProps' => [
                    'service' => $service ? $service->getNom() : '',
                    'client' => $user ? $user->getNom() . ' ' . $user->getPrenom() : '',
                    'vehicule' => $vehicule ? $vehicule->getMarque() . ' ' . $vehicule->getModele() : '',
                    'description' => 'Réservation #' . $reservation->getId()
                ]
            ];
        }
        
        return new JsonResponse($events);
    }
}