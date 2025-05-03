<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Form\EmployeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Service;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\EmployeRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/employe')]
final class EmployeController extends AbstractController
{
    #[Route(name: 'app_employe_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $employes = $entityManager
            ->getRepository(Employe::class)
            ->findAll();

        return $this->render('employe/index.html.twig', [
            'employes' => $employes,
        ]);
    }
    public function sendEmail(string $email, string $code): JsonResponse
    {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Changed to OFF for production, use DEBUG_SERVER for testing
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'motezselmi.77@gmail.com';
            $mail->Password = 'tghu xktr pllb juwq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Changed to STARTTLS for port 587
            $mail->Port = 587;

            // Important security note:
            // Consider using app-specific password or moving credentials to .env file
            // $mail->Password = $_ENV['GMAIL_APP_PASSWORD'];

            // Recipients
            $mail->setFrom('motezselmi.77@gmail.com', 'Vehify'); // Changed to actual sender
            $mail->addAddress($email); // Using the parameter passed to the function

            // Uncomment if you need these
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Content
            $mail->isHTML(false);
            $mail->Subject = 'Verifier Compte By vehify';
            $mail->Body = 'Voici votre Mot De passe : [' . $code . ']' . "\r\n\r\n" .
                'Si vous avez des questions ou besoin d\'assistance supplementaire, n\'hesitez pas à nous contacter.' . "\r\n\r\n" .
                'Cordialement;';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            return new JsonResponse(['status' => 'success', 'message' => 'Email sent successfully']);

        } catch (Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Message could not be sent',
                'error' => $mail->ErrorInfo
            ], 500);
        }

    }

    #[Route('/new', name: 'app_employe_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
{
    $employe = new Employe();

    // Générer un mot de passe unique (par exemple, en utilisant un générateur aléatoire)
    $defaultPassword = bin2hex(random_bytes(8)); // Génère un mot de passe aléatoire de 16 caractères

    // On assigne ce mot de passe à l'employé
    $employe->setStatut($defaultPassword);  // Le mot de passe est stocké dans 'statut'

    $form = $this->createForm(EmployeType::class, $employe);
    $form->handleRequest($request);

    if ($form->isSubmitted() && !$form->isValid()) {
        $this->addFlash('error', '❗Veuillez remplir tous les champs obligatoires.');
    }

    if ($form->isSubmitted() && $form->isValid()) {
        $plainPassword = $form->get('statut')->getData(); // Récupère le mot de passe du formulaire

        // Optionnel : hasher le mot de passe avant de le stocker
        // $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
        // $employe->setStatut($hashedPassword);  // Si tu veux stocker le mot de passe hashé

        $entityManager->persist($employe);
        $entityManager->flush();
        $this->sendEmail($employe->getEmail(), $plainPassword);
        // 📩 Envoi de l’email avec le mot de passe

        $this->addFlash('success', '✅ Employé ajouté et email envoyé !');
        return $this->redirectToRoute('app_employe_index');
    }

    return $this->render('employe/new.html.twig', [
        'employe' => $employe,
        'form' => $form,
    ]);
}



    #[Route('/{idEmploye}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }

    #[Route('/{idEmploye}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/{idEmploye}', name: 'app_employe_delete', methods: ['POST'])]
    public function delete(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employe->getIdEmploye(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/employe/search', name: 'employe_search_nom', methods: ['GET'])]
    public function search(Request $request, EmployeRepository $employeRepository): Response
    {
        $searchValue = $request->query->get('searchValue');

        if (!$searchValue) {
            // Si la recherche est vide, ne rien renvoyer ou renvoyer la liste complète si nécessaire
            return new Response(''); 
        }

        $employes = $employeRepository->findByName($searchValue);

        return $this->render('employe/_search_results.html.twig', [
            'employes' => $employes,
        ]);
    }

    #[Route('/contrat-pdf/{idEmploye}', name: 'contrat_pdf')]
    public function generatePdf(Employe $employe): Response
    {
        // Options PDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Initialisation Dompdf
        $dompdf = new Dompdf($pdfOptions);

        // Rendu HTML avec Twig
        $html = $this->renderView('employe/employePDF.html.twig', [
            'employe' => $employe,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Retour PDF en réponse
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="contrat_'. $employe->getNom() .'.pdf"',
            ]
        );
    }
}