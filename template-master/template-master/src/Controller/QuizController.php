<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Repository\QuizRepository;
use App\Service\QuizApiClient;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quiz')]
class QuizController extends AbstractController
{
    #[Route('/', name: 'app_quiz_index', methods: ['GET'])]
    public function index(QuizRepository $quizRepository): Response
    {
        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizRepository->findAll(),
        ]);
    }
    #[Route('/generate', name: 'app_quiz_generate', methods: ['GET'])]
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
            return $this->redirectToRoute('app_quiz_index');
        }
    }

    #[Route('/submit', name: 'app_quiz_submit', methods: ['POST'])]
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

    #[Route('/result/{id}', name: 'app_quiz_result', methods: ['GET'])]
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

    #[Route('/rate/{id}', name: 'app_quiz_rate', methods: ['POST'])]
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
}