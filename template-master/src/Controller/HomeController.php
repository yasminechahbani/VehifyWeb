<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Permis;
use App\Entity\Quiz;
use App\Service\QuizApiClient;
use App\Entity\Service;
use App\Form\PermisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**permis on working controller**/
    #[Route('showAllPermis', name: 'app_about_permisAll', methods: ['GET'])]
    public function about(EntityManagerInterface $entityManager): Response
    {
        $permis = $entityManager
            ->getRepository(Permis::class)
            ->findAll();

        return $this->render('permis/index.html.twig', [
            'permis' => $permis,
        ]);}
    #[Route('newPermis', name: 'app_new_permis', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
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
            $permis->setIdEmploye($employe);
        }

        $form = $this->createForm(PermisType::class, $permis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($permis);
            $entityManager->flush();

            $this->addFlash('success', 'Permis créé avec succès');
            return $this->redirectToRoute('app_about_permisAll');
        }

        return $this->render('permis/new.html.twig', [
            'permis' => $permis,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id_permis}', name: 'app_show_permisOne', methods: ['GET'])]
    public function show(Permis $permis): Response
    {
        return $this->render('permis/show.html.twig', [
            'permi' => $permis,
        ]);
    }
    #[Route('/{id_permis}/edit', name: 'app_edit_permisOne', methods: ['GET', 'POST'])]
    public function edit(Request $request, Permis $permis, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PermisType::class, $permis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Automatically update expiration date if delivery date changed
            if ($form->get('date_delivrance')->isSubmitted()) {
                $permis->setDateDelivrance($permis->getDateDelivrance());
            }

            $entityManager->flush();

            $this->addFlash('success', 'Permis mis à jour avec succès');
            return $this->redirectToRoute('app_about_permisAll');
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

        return $this->redirectToRoute('app_about_permisAll');
    }

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

   #[Route('/quiz/submit', name: 'app_quiz_submit', methods: ['POST'])]
    public function submit(Request $request, EntityManagerInterface $entityManager): Response
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
        $quiz->setStatut($score > 0 ? 'Passed' : 'Failed');
        $quiz->setDateTest(new \DateTime());
        $quiz->setIdUser(32); // Using static user ID for testing purposes

        // Save to database
        $entityManager->persist($quiz);
        $entityManager->flush();

        // Redirect to results page with quiz ID
        return $this->redirectToRoute('app_quiz_result', [
            'id' => $quiz->getId(),
            'score' => $score,
            'total' => $totalQuestions
        ]);
    }

    #[Route('/quiz/result/{id}', name: 'app_quiz_result', methods: ['GET'])]
    public function result(Quiz $quiz, Request $request): Response
    {
        $score = $request->query->get('score');
        $total = $request->query->get('total');

        return $this->render('quiz/result.html.twig', [
            'quiz' => $quiz,
            'score' => $score,
            'total' => $total
        ]);
    }
    #[Route('/quiz/rate/{id}', name: 'app_quiz_rate', methods: ['POST'])]
    public function rate(Quiz $quiz, Request $request, QuizRepository $quizRepository): Response
    {
        $rating = $request->request->get('rating');

        if ($rating && $rating >= 1 && $rating <= 5) {
            $quizRepository->saveQuizRating($quiz->getId(), (int)$rating);
            $this->addFlash('success', 'Thank you for rating the quiz!');
        } else {
            $this->addFlash('error', 'Invalid rating value');
        }

        return $this->redirectToRoute('app_quiz_index');
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
