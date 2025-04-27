<?php
 
namespace App\Controller;
 
use App\Entity\Facture;
use App\Entity\Paiement;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Stripe;
use Stripe\BillingPortal\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class StripeController extends AbstractController
{
    #[Route('/stripe', name: 'app_stripe')]
    public function index(): Response
    {
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
        ]);
    }
    
    #[Route('/stripe/payment/{reservation_id}', name: 'app_stripe_payment')]
    public function payment(int $reservation_id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer la réservation
        $reservation = $entityManager->getRepository(Reservation::class)->find($reservation_id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
        
        // Récupérer le service et son prix
        $service = $reservation->getServiceId();
        $prix = $service->getPrix();
        
        // Convertir le prix en centimes pour Stripe (Stripe utilise les centimes)
        $montant = (int)($prix * 100);
        
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
            'reservation' => $reservation,
            'montant' => $montant,
            'service' => $service
        ]);
    }
 
    #[Route('/stripe/create-charge', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $reservation_id = $session->get('reservation_id'); // Récupérer l'ID de réservation

        $reservation = $entityManager->getRepository(Reservation::class)->find($reservation_id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
        
        // Récupérer le service et son prix
        $service = $reservation->getServiceId();
        $prix = $service->getPrix();
        
        // Convertir le prix en centimes pour Stripe
        $montant = (int)($prix * 100);
        
        Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);
        $charge = Stripe\Charge::create([
            "amount" => $montant,
            "currency" => "eur",
            "source" => $request->request->get('stripeToken'),
            "description" => "Paiement pour la réservation #" . $reservation_id
        ]);
        
        // Create payment record
        $paiement = new Paiement();

        $paiement->setReservation($reservation);
        $paiement->setDatePaiement(new \DateTime());
        $paiement->setPrix($prix);
        $paiement->setStatut('Confirmé');
        $paiement->setNumeroCarte('************' . substr($request->request->get('cardNumber', ''), -4));
        $paiement->setTelephone($request->request->get('phone', 'N/A'));
        $paiement->setDateExpiration($request->request->get('expiry', '12/99'));
        $paiement->setCvc('***');
        $paiement->setNomTitulaireCarte($request->request->get('cardName', 'Paiement Stripe'));
        
        $entityManager->persist($paiement);
        $entityManager->flush();

        $facture = new Facture();
        $facture->setNumeroFacture('FACT-' . date('YmdHis') . '-' . rand(1000, 9999));
        $facture->setDateFacturation(new \DateTime());
        $facture->setMontant($prix);
        $facture->setDescription('Facture pour la réservation #' . $reservation_id);
        $facture->setStatut('Payée');
        $facture->setPaiement($paiement);
        $facture->setReservation($reservation);
        $facture->setStripeChargeId($charge->id);
        
        $entityManager->persist($facture);
        $entityManager->flush();
        
        $this->addFlash(
            'success',
            'Paiement effectué avec succès!'
        );
        
        return $this->redirectToRoute('app_reservation_show', ['id_reservation' => $reservation_id], Response::HTTP_SEE_OTHER);
    }
}