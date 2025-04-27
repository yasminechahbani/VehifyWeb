<?php

namespace App\Controller;

use App\Service\PermisGenerationService;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Employe;
use App\Entity\Permis;
use App\Entity\Quiz;
use App\Service\QuizApiClient;
use App\Entity\Service;
use App\Form\editEmployePermis;
use App\Form\PermisType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\QuizRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\RatingType;
use App\Repository\PermisRepository;
use App\Repository\UserRepository;

use App\Service\TwilioWhatsappService;

#[Route('/Quiz')]

class QuizController extends AbstractController
{
    private $twilioWhatsappService;

    public function __construct(TwilioWhatsappService $twilioWhatsappService)
    {
        $this->twilioWhatsappService = $twilioWhatsappService;
    }

/*
#[Route('/showAllPermis', name: 'app_about_permisAll', methods: ['GET'])]
public function about(EntityManagerInterface $entityManager): Response
{
    $permis = $entityManager
        ->getRepository(Permis::class)
        ->findAll();

    return $this->render('employe_front/index.html.twig', [
        'permis' => $permis,
    ]);}
*/
#[Route('/newPermis', name: 'app_new_permis', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session, QuizRepository $quizRepository): Response
{
    $permis = new Permis();

    // Set default state
    $permis->setEtat('Active');

    // Set relationships - you may want to modify this based on your business logic
    $service = $entityManager->getRepository(Service::class)->find(1);
    $employe = $entityManager->getRepository(Employe::class)->find(1);

    if ($service) {
        $permis->setIdService($service);
    }
    if ($employe) {
        $permis->setIdEmploye($session->get('id'));
    }

    // Fetch the quiz ID from the database
    // Assuming the user ID is the same as the `session` user or passed in the request
    $userId = $session->get('id');  // or pass the userId if required

    // Fetch the quiz using the QuizRepository
    $quiz = $quizRepository->findQuizIdByUserId($userId);  // Use your repository method
    if ($quiz) {
        $permis->setIdQuiz($quiz->getId());
        dump($permis->setIdQuiz());
        exit;
    }


    $form = $this->createForm(PermisType::class, $permis);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($permis);
        $entityManager->flush();

        $this->addFlash('success', 'Permis créé avec succès');
        return $this->redirectToRoute('app_employe_front');
    }

    return $this->render('permis/new.html.twig', [
        'permis' => $permis,
        'form' => $form->createView(),
    ]);
}



#[Route('/{numeroPermis}', name: 'app_show_permisOne', methods: ['GET'])]
public function show(string $numeroPermis, PermisRepository $permisRepository): Response
{
    $permis = $permisRepository->findOneBy(['numero_permis' => $numeroPermis]);

    if (!$permis) {
        throw $this->createNotFoundException('Permis not found');
    }

    return $this->render('permis/show.html.twig', [
        'permi' => $permis,
    ]);
}

#[Route('/{numeroPermis}/edit', name: 'app_edit_permisOne', methods: ['GET', 'POST'])]
public function edit(Request $request, string $numeroPermis, EntityManagerInterface $entityManager, PermisRepository $permisRepository, QuizRepository $quizRepository): Response
{
    $permis = $permisRepository->findOneBy(['numero_permis' => $numeroPermis]);

    if (!$permis) {
        throw $this->createNotFoundException("Permis non trouvé.");
    }

    // Check if the permis is a renewal (you can replace this logic with your own criteria)
    $isRenewal = $permis->getEtat() === 'Expired'; // Example: renewal if the permis is expired

    // Pass both 'is_edit' and 'is_renewal' to the form
    $form = $this->createForm(PermisType::class, $permis, [
        'is_edit' => true,       // 🔥 tell the form this is edit
        'is_renewal' => $isRenewal // 🔥 Pass the renewal flag
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Auto-update expiration logic if needed
        if ($form->get('date_delivrance')->isSubmitted()) {
            $permis->setDateDelivrance($permis->getDateDelivrance());
        }

        // Fetch and assign quiz (assuming this is relevant for edit)
        $userId = $permis->getIdEmploye();
        $quizId = $quizRepository->findQuizIdByUserId($userId);
        $permis->setIdQuiz($quizId);

        $entityManager->flush();

        $this->addFlash('success', 'Permis mis à jour avec succès');
        return $this->redirectToRoute('app_employe_front');
    }

    return $this->render('permis/edit.html.twig', [
        'permi' => $permis,
        'form' => $form->createView(),
    ]);
}


#[Route('/{id_permis}', name: 'app_delete_permis2', methods: ['POST'])]
public function delete(Request $request, Permis $permis, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$permis->getIdPermis(), $request->request->get('_token'))) {
        $entityManager->remove($permis);
        $entityManager->flush();
        $this->addFlash('success', 'Permis supprimé avec succès');
    }

    return $this->redirectToRoute('app_employe_front');
}
//renewal//
#[Route('/permis/renew', name: 'permis_request_renewal')]
public function requestRenewal(SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    // Retrieve the user ID from session
    $userId = $session->get('id');

    // Step 1: Retrieve the Quiz associated with the user
    $quiz = $entityManager->getRepository(Quiz::class)->findOneBy(['idUser' => $userId]);

    if (!$quiz) {
        $this->addFlash('warning', 'No quiz found for the current user.');
        return $this->redirectToRoute('app_home');
    }

    // Step 2: Retrieve the Permis associated with the found Quiz
    $permis = $entityManager->getRepository(Permis::class)->findOneBy(['idQuiz' => $quiz->getId()]);

    if (!$permis) {
        $this->addFlash('warning', 'You do not have a Permis yet.');
        return $this->redirectToRoute('app_home');
    }

    // Check if the renewal flag is already set
    if ($permis->isRenewal()) {
        $this->addFlash('info', 'Renewal request is already submitted.');
        return $this->redirectToRoute('app_home');
    }

    // Set the renewal flag to true
    $permis->setIsRenewal(true);
    $entityManager->flush();

    $this->addFlash('success', 'Renewal request submitted successfully.');

    // Render the updated view
    return $this->render('BaseFHomePage.html.twig', [
        'permis' => $permis,
    ]);
}

//quiz//

#[Route('/quiz/generate', name: 'app_quiz_generate', methods: ['GET'])]
public function generate(QuizApiClient $quizApiClient): Response
{
    try {
        $quizData = $quizApiClient->generateQuiz();

        return $this->render('quiz/quiz.html.twig', [
            'quizText' => $quizData['quizText'],
            'questions' => $quizData['questions']
        ]);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Failed to generate quiz: ' . $e->getMessage());
        return $this->redirectToRoute('app_home');
    }
}

#[Route('/quiz/submit', name: 'app_quiz_submit')]
// Controller method updated to include the userRepository argument
    public function submit(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, SessionInterface $session): Response
    {
        $userAnswers = $request->request->all('answers');
        $correctAnswers = $request->request->all('correct_answers');
        $totalQuestions = count($correctAnswers);

        // Calculate score
        $score = 0;
        foreach ($userAnswers as $index => $answer) {
            if (isset($correctAnswers[$index]) && $answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        // Create new quiz entity
        $quiz = new Quiz();
        $quiz->setScore($score);
        $quiz->setStatut($score > 6 ? 'Passed' : 'Failed');
        $quiz->setDateTest(new \DateTime());
        $quiz->setIdUser($session->get('id')); // Using static user ID for testing purposes

        // Save to database
        $entityManager->persist($quiz);
        $entityManager->flush();

        // Fetch the user and set the quiz
        $user = $userRepository->find($session->get('id'));
       /* if ($user) {
            $user->setIdQuiz($quiz);
            $entityManager->flush();
        }*/

        // Redirect to results page with quiz ID
        return $this->redirectToRoute('app_quiz_result', [
            'id' => $quiz->getId(),
            'score' => $score,
            'total' => $totalQuestions
        ]);
    }

#[Route('/quiz/result/{id}', name: 'app_quiz_result')]
public function result(Quiz $quiz, Request $request): Response
{
    $score = $request->query->get('score');
    $total = $request->query->get('total');
    $ratingForm = $this->createForm(RatingType::class, null, [
        'action' => $this->generateUrl('app_quiz_rate', ['id' => $quiz->getId()])
    ]);

    return $this->render('quiz/result.html.twig', [
        'quiz' => $quiz,
        'score' => $score,
        'total' => $total,
        'ratingForm' => $ratingForm->createView()
    ]);
}

#[Route('/quiz/rate/{id}', name: 'app_quiz_rate', methods: ['POST'])]
public function rate(Quiz $quiz, Request $request, EntityManagerInterface $entityManager): Response
{
    // Get the form data
    $formData = $request->request->all();
    
    // Uncomment to debug the form structure
    // dump($formData); die;
    
    // Handle the form submission
    $form = $this->createForm(RatingType::class);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        // Get data from the form
        $data = $form->getData();
        $ratingValue = $data['rating'] ?? null;
        
        if ($ratingValue !== null) {
            // Update the quiz entity
            $quiz->setRating((int)$ratingValue);
            $entityManager->flush();
            
            $this->addFlash('success', 'Thank you for rating the quiz!');
        } else {
            $this->addFlash('error', 'Please select a rating');
        }
    } else {
        $this->addFlash('error', 'There was a problem with your submission');
    }

    // Redirect back to the result page
    return $this->redirectToRoute('app_home', [
        'id' => $quiz->getId(),
        'score' => $quiz->getScore(),
        'total' => 10
    ]);
}
#[Route('/check-user-quiz/{userId}', name: 'app_quiz_check_status', methods: ['GET'])]
public function checkQuizStatus(int $userId, QuizRepository $quizRepository): Response
{
    $hasPassed = $quizRepository->hasPassedQuiz($userId);
    
    return $this->json([
        'hasPassed' => $hasPassed
    ]);
}
//    //added logic for jointure permis quiz//
// Import dompdf classes at the top of your controller



#[Route('/quiz/result/{id}/download', name: 'app_quiz_result_download', methods: ['GET'])]
public function downloadResult(Quiz $quiz, Request $request): Response
{
    // Get the quiz score and total from the request
    $score = $request->query->get('score');
    $total = $request->query->get('total');

    // Create HTML content for the PDF
    $html = $this->renderView('quiz/pdf_result.html.twig', [
        'quiz' => $quiz,
        'score' => $score,
        'total' => $total
    ]);

    // Initialize Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $dompdf = new Dompdf($options);

    // Load HTML content
    $dompdf->loadHtml($html);

    // Set paper size (A4)
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Get the generated PDF as a string
    $pdfContent = $dompdf->output();

    // Return the PDF content as a Response
    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="quiz_result.pdf"' // change 'inline' to 'attachment' for download
    ]);
}
    #[Route('/check-expired-permis', name: 'check_expired_permis')]
    public function checkExpiredPermis(
        EntityManagerInterface $entityManager,
        PermisRepository $permisRepository,
        TwilioWhatsappService $twilioWhatsappService
    ): Response
    {
        $today = new \DateTime();
        $allPermis = $permisRepository->findAll();
        $messagesSent = 0;

        foreach ($allPermis as $permis) {
            // Check if expiry date is today
            if ($permis->getDateExpiration() && $permis->getDateExpiration()->format('Y-m-d') === $today->format('Y-m-d')) {
                // Get owner's phone number
                $phoneNumber = $permis->getTelephone(); // Or wherever the phone number is stored
                if ($phoneNumber) {
                    $message = "Your driver's license has expired today. Please renew it as soon as possible.";
                    // Send WhatsApp
                    $twilioWhatsappService->sendMessage('+216' . $phoneNumber, $message);
                    $messagesSent++;
                }
            }
        }

        return new Response("Checked expirations. WhatsApp messages sent: " . $messagesSent);
}

    #[Route('/check-expired-permits-manual', name: 'app_check_expired_permits_manual')]
    public function checkExpiredPermitsManual(PermisRepository $permisRepository, TwilioWhatsappService $twilioService): Response
    {
        // Get today's date
        $today = new \DateTime();

        // Find expired permits
        $expiredPermis = $permisRepository->findExpiredPermis($today);

        $sentCount = 0;
        $failedCount = 0;

        foreach ($expiredPermis as $permis) {
            $phoneNumber = $permis->getIdEmploye()->getTelephone();

            if (!$phoneNumber) {
                continue;
            }

            try {
                // Format the expiration date
                $expirationDate = $permis->getDateExpiration()->format('d/m/Y');

                // Create a personalized message
                $message = sprintf(
                    "Hello %s, your permit #%s has expired on %s. Please contact your administrator to renew it as soon as possible.",
                    $permis->getIdEmploye()->getNom(),
                    $permis->getNumeroPermis(),
                    $expirationDate
                );

                // Send WhatsApp message
                $twilioService->sendMessage('+216' . $phoneNumber, $message);

                // Update permit status
                if ($permis->getEtat() !== 'Expired') {
                    $permis->setEtat('Expired');
                    $permisRepository->save($permis, true);
                }

                $sentCount++;

            } catch (\Exception $e) {
                $failedCount++;
            }
        }

        return $this->json([
            'success' => true,
            'message' => sprintf('Checked %d expired permits. Sent %d notifications, %d failed.',
                count($expiredPermis), $sentCount, $failedCount)
        ]);
    }


#[Route('/services', name: 'app_services')]
public function services(): Response
{
    return $this->render('services/services.html.twig', [
        'controller_name' => 'HomeController',
    ]);
}
#[Route('/contact', name: 'app_contact')]
public function contact(): Response
{
    return $this->render('contact/contact.html.twig', [
        'controller_name' => 'HomeController',
    ]);
}
}