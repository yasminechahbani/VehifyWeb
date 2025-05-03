<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Service;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Twilio\Rest\Client;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

class CalendrierController extends AbstractController
{
    // Configuration Twilio
    private const TWILIO_ACCOUNT_SID = "ACab7650563c3769363e28dd7b022971c0";
    private const TWILIO_AUTH_TOKEN = "ff0ef559075644c283c06b24292198d0";
    private const TWILIO_NUMBER = "+15802179315";
    
    #[Route('/afficherCalendrier/{service_id?}', name: 'app_calendrier_index')]
    public function index(EntityManagerInterface $entityManager,?int $service_id,SessionInterface $session): Response
    {
        $service = $entityManager->getRepository(Service::class)->findOneBy([
            'idService' => $service_id
        ]);
        
                // Récupérer le service sélectionné (si présent)
        $session->set('service_id', $service_id);


        // Créer une nouvelle instance de Reservation pour le formulaire
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        
        return $this->render('calendrier/index.html.twig', [
            'service' => $service,
            'service_id'=> $service_id,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/new', name: 'app_calendrier_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Définir l'utilisateur actuel comme propriétaire de la réservation
            // $reservation->setUserId($this->getUser());
            
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            return new JsonResponse([
                'success' => true,
                'id' => $reservation->getId(),
            ]);
        }
        
        return new JsonResponse([
            'success' => false,
            'errors' => $this->getFormErrors($form),
        ], 400);
    }
    
    private function getFormErrors($form): array
    {
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
        return $errors;
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
    
    #[Route('/calendrier/send-notifications', name: 'app_calendrier_send_notifications')]
    public function sendNotifications(EntityManagerInterface $entityManager): Response
    {
        // Récupérer les réservations prévues exactement 24h plus tard
        $now = new \DateTime();
        $exactlyTomorrow = clone $now;
        $exactlyTomorrow->modify('+24 hours');
        
        // Format the current time to match the reservation time format (HH:MM:SS)
        $currentTime = $now->format('H:i:s');
        
        $reservations = $entityManager->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->leftJoin('r.userId', 'u')
            ->leftJoin('r.serviceId', 's')
            ->leftJoin('r.vehiculeId', 'v')
            ->addSelect('u', 's', 'v')
            ->where('r.dateReservation = :tomorrow')
            ->andWhere('r.heureReservation = :currentTime')
            ->setParameter('tomorrow', $exactlyTomorrow->format('Y-m-d'))
            ->setParameter('currentTime', $currentTime)
            ->getQuery()
            ->getResult();
            
        $sentCount = 0;
        $errorCount = 0;
        $errors = [];
        
        foreach ($reservations as $reservation) {
            $user = $reservation->getUserId();
            $service = $reservation->getServiceId();
            $vehicule = $reservation->getVehiculeId();
            
            // Vérifier si l'utilisateur a un numéro de téléphone
            if ($user && $user->getTel()) {
                $phoneNumber = $user->getTel();
                $date = $reservation->getDateReservation()->format('d/m/Y');
                $heure = $reservation->getHeureReservation();
                $serviceName = $service ? $service->getNom() : 'service';
                
                $message = "Rappel: Vous avez rendez-vous demain ($date) à $heure au service de  $serviceName. " .
                           "Véhicule: " . ($vehicule ? $vehicule->getMarque() . ' ' . $vehicule->getModele() : 'Non spécifié');
                
                try {
                    $this->sendSms($phoneNumber, $message);
                    $sentCount++;
                } catch (\Exception $e) {
                    $errorCount++;
                    $errors[] = [
                        'user' => $user->getNom() . ' ' . $user->getPrenom(),
                        'phone' => $phoneNumber,
                        'error' => $e->getMessage()
                    ];
                }
            }
        }
        
        return $this->render('calendrier/notifications.html.twig', [
            'sent' => $sentCount,
            'errors' => $errorCount,
            'error_details' => $errors,
            'total' => count($reservations)
        ]);
    }
    
    private function sendSms(string $to, string $message): void
    {
        // // Create Twilio client instance
         $twilio = new Client(self::TWILIO_ACCOUNT_SID, self::TWILIO_AUTH_TOKEN);
        
        // // Send SMS
     $twilio->messages->create(
             $to,
             [
                 'from' => self::TWILIO_NUMBER,
                 'body' => $message
             ]
         );
    }
    
    #[Route('/calendrier/disponibilites', name: 'app_calendrier_disponibilites', methods: ['GET'])]
    public function getDisponibilites(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $date = $request->query->get('date');
        $serviceId = $request->query->get('service_id'); // Changé de 'service' à 'service_id'
        
        if (!$date) {
            return new JsonResponse(['error' => 'Date requise'], 400);
        }
        
        // Convertir la date en objet DateTime
        $dateObj = new \DateTime($date);
        
        // Heures d'ouverture (de 8h à 18h)
        $heuresOuverture = ['08:00', '09:00', '10:00', '11:00', '12:00', '14:00', '15:00', '16:00', '17:00'];
        
        // Récupérer les réservations existantes pour cette date
        $queryBuilder = $entityManager->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->where('r.dateReservation = :date')
            ->setParameter('date', $dateObj->format('Y-m-d'));
        
        // Filtrer par service si spécifié
        if ($serviceId) {
            $queryBuilder->andWhere('r.serviceId = :serviceId')
                ->setParameter('serviceId', $serviceId);
        }
        
        $reservations = $queryBuilder->getQuery()->getResult();
        
        // Extraire les heures déjà réservées
        $heuresReservees = [];
        foreach ($reservations as $reservation) {
            $heuresReservees[] = substr($reservation->getHeureReservation(), 0, 5); // Format HH:MM
        }
        
        // Préparer les créneaux disponibles
        $creneaux = [];
        foreach ($heuresOuverture as $heure) {
            $creneaux[] = [
                'heure' => $heure,
                'disponible' => !in_array($heure, $heuresReservees)
            ];
        }
        
        return new JsonResponse($creneaux);
    }
}