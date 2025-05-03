<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Form\ReservationSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Service\Checkout\SessionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\User;
use Stripe\BillingPortal\Session;
use App\Entity\Service;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route(name: 'app_reservation_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $searchForm = $this->createForm(ReservationSearchType::class);
        $searchForm->handleRequest($request);
    
        // Get current user ID from session
        $currentUserId = $session->get('id');
    
        $queryBuilder = $entityManager
            ->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->leftJoin('r.serviceId', 's')
            ->leftJoin('r.vehiculeId', 'v')
            ->leftJoin('r.userId', 'u')
            ->addSelect('s', 'v', 'u');
    
        // Ajouter la condition de l'utilisateur courant seulement si l'ID existe
        if ($currentUserId) {
            $queryBuilder->andWhere('u.id = :currentUserId')
                ->setParameter('currentUserId', $currentUserId);
        }
    
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $criteria = $searchForm->getData();
    
            if (!empty($criteria['dateReservation'])) {
                // Modifier la recherche par date pour inclure toute la journée
                $date = $criteria['dateReservation'];
                $startDate = clone $date;
                $startDate->setTime(0, 0, 0);
                $endDate = clone $date;
                $endDate->setTime(23, 59, 59);
                
                $queryBuilder->andWhere('r.dateReservation BETWEEN :startDate AND :endDate')
                    ->setParameter('startDate', $startDate)
                    ->setParameter('endDate', $endDate);
            }
    
            if (!empty($criteria['serviceId'])) {
                $queryBuilder->andWhere('s.idService = :serviceId')
                    ->setParameter('serviceId', $criteria['serviceId']);
            }
        }
    
        $reservations = $queryBuilder->getQuery()->getResult();
    
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
            'search_form' => $searchForm->createView(),
        ]);
    }

    #[Route('/new/{service_id?}', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session, ?int $service_id): Response
    {
        $reservation = new Reservation();
        
        // Récupérer les paramètres de date et heure s'ils sont fournis
        $date = $request->query->get('date');
        $heure = $request->query->get('heure');
        
        // Si la date est fournie, définir la date de réservation
        if ($date) {
            $dateObj = new \DateTime($date);
            $reservation->setDateReservation($dateObj);
        }
        
        // Si l'heure est fournie, définir l'heure de réservation
        if ($heure) {
            $reservation->setHeureReservation($heure . ':00'); // Ajouter les secondes pour le format HH:MM:SS
        }
        
        // Utiliser l'ID du service de la session
        $service_id = $session->get('service_id');
        if ($service_id) {
            $service = $entityManager->getRepository(Service::class)->find($service_id);
            if ($service) {
                $reservation->setServiceId($service);
            }
        }
        
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the User entity from database using session ID
            $userId = $session->get('id');
            $user = $entityManager->getRepository(User::class)->find($userId);
            
            if (!$user) {
                throw $this->createNotFoundException('User not found');
            }
            
            $reservation->setUserId($user);
            $entityManager->persist($reservation);
            $entityManager->flush();
    
            // Store reservation ID in session for payment
            $session->set('reservation_id', $reservation->getId());
            
            return $this->redirectToRoute('app_stripe_payment', [
                'reservation_id' => $reservation->getId()
            ]);
        }

        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findBy(['userId' => $session->get('id')], ['dateReservation' => 'DESC'], 5);
    
        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'reservations' => $reservations
        ]);
    }

    #[Route('/{id_reservation}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(int $id_reservation, EntityManagerInterface $entityManager): Response
    {
        $reservation = $entityManager->getRepository(Reservation::class)->find($id_reservation);

        if (!$reservation) {
            throw $this->createNotFoundException('Reservation not found.');
        }

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id_reservation}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id_reservation, EntityManagerInterface $entityManager): Response
    {
        $reservation = $entityManager->getRepository(Reservation::class)->find($id_reservation);

        if (!$reservation) {
            throw $this->createNotFoundException('Reservation not found.');
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Reservation updated successfully!');

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id_reservation}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, int $id_reservation, EntityManagerInterface $entityManager): Response
    {
        $reservation = $entityManager->getRepository(Reservation::class)->find($id_reservation);

        if (!$reservation) {
            throw $this->createNotFoundException('Reservation not found.');
        }

        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Reservation deleted successfully.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Unable to delete reservation. Please try again.');
            }
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
