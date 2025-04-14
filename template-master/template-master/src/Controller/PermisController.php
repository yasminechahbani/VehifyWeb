<?php

namespace App\Controller;

use App\Entity\Permis;
use App\Entity\Service;
use App\Entity\Employe;
use App\Entity\User; // Ensure this is the correct User entity path
use App\Form\PermisType;
use App\Repository\PermisRepository;
use App\Repository\QuizRepository;
use App\Repository\UserRepository; // Add this import
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/permis')]


class PermisController extends AbstractController
{
    private QuizRepository $quizRepository;

    public function __construct(QuizRepository $quizRepository)
    {
        $this->quizRepository = $quizRepository;
    }

    #[Route('/check-quiz/{userId}', name: 'app_permis_check_quiz', methods: ['GET'])]
    public function checkQuizStatus(int $userId): JsonResponse
    {
        $hasPassed = $this->quizRepository->hasPassedQuiz($userId);
        return $this->json(['hasPassed' => $hasPassed]);
    }


    #[Route('/', name: 'app_permis_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $permis = $entityManager
            ->getRepository(Permis::class)
            ->findAll();

        return $this->render('permis/index.html.twig', [
            'id_permis' => $permis,
        ]);
    }

    /*    #[Route('/new', name: 'app_permis_new', methods: ['GET', 'POST'])]
        public function new(Request $request, EntityManagerInterface $entityManager): Response
        {
            $permis = new Permis();

            // Set default state
            $permis->setEtat('Active');

            // Set relationships - you may want to modify this based on your business logic
            $service = $entityManager->getRepository(Service::class)->find(1);
            $employe = $entityManager->getRepository(Employe::class)->find(1);
            $quizValid=$entityManager->getRepository(Quiz::class)->find(4);

            if ($service) {
                $permis->setIdService($service);
            }
            if ($employe) {
                $permis->setIdEmploye($employe);
            }
            if ($quizValid) {
                $permis->setIdQuiz($quizValid);
            }

            $form = $this->createForm(PermisType::class, $permis);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($permis);
                $entityManager->flush();

                $this->addFlash('success', 'Permis créé avec succès');
                return $this->redirectToRoute('app_permis_index');
            }

            return $this->render('permis/new.html.twig', [
                'permis' => $permis,
                'form' => $form->createView(),
            ]);
        }*/
    #[Route('/new', name: 'app_permis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $permis = new Permis();
        $form = $this->createForm(PermisType::class, $permis, [
            'validation_groups' => ['user_check'] // Initially only show user ID field
        ]);

        $form->handleRequest($request);
        $userId = null;
        $quizValidated = false;
        $errorMessage = '';

        // Get user_id from the form data if the form was submitted
        if ($form->isSubmitted() && $form->has('user_id') && $form->get('user_id')->getData()) {
            $userId = $form->get('user_id')->getData()->getId();

            // Check if user has passed any quiz using the repository
            $passedQuiz = $this->quizRepository->findOneBy([
                'idUser' => $userId,
                'statut' => 'Passed'
            ]);

            // If not found with simple query, try with more complex conditions
            if (!$passedQuiz) {
                $passedQuiz = $entityManager->getRepository(Quiz::class)
                    ->createQueryBuilder('q')
                    ->where('q.idUser = :userId')
                    ->andWhere('UPPER(q.statut) = UPPER(:status)')
                    ->andWhere('q.score >= :minScore')
                    ->setParameters([
                        'userId' => $userId,
                        'status' => 'Passed',
                        'minScore' => 70 // Minimum passing score
                    ])
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            }

            if ($passedQuiz) {
                $quizValidated = true;
                // Get employee info
                $employe = $entityManager->getRepository(Employe::class)->find($userId);
                if ($employe) {
                    $permis->setIdEmploye($employe);
                    $permis->setIdQuiz($passedQuiz);
                    $permis->setEtat('Active');

                    // Generate a unique permis number
                    $numero = strtoupper(substr($employe->getNom(), 0, 2)) . str_pad((string)rand(0, 99999999), 8, '0', STR_PAD_LEFT);
                    $permis->setNumeroPermis($numero);

                    // Set the delivery date to today
                    $permis->setDateDelivrance(new \DateTime());

                    // Set default service if needed
                    $service = $employe->getIdService();
                    if ($service) {
                        $permis->setIdService($service);
                    }
                } else {
                    $errorMessage = 'Cet utilisateur n\'a pas encore réussi le quiz requis.';
                }
            }

            if ($form->isSubmitted() && $form->isValid() && $quizValidated) {
                // Ensure all required fields are set before persisting
                if (!$permis->getIdQuiz()) {
                    $this->addFlash('error', 'Erreur: Quiz non trouvé');
                    return $this->redirectToRoute('app_permis_new');
                }

                $entityManager->persist($permis);
                $entityManager->flush();

                $this->addFlash('success', 'Permis créé avec succès');
                return $this->redirectToRoute('app_permis_index');
            }
        }

        return $this->render('permis/new.html.twig', [
            'permis' => $permis,
            'form' => $form->createView(),
            'quizValidated' => $quizValidated,
            'errorMessage' => $errorMessage
        ]);
    }

    #[Route('/{id_permis}', name: 'app_permis_show', methods: ['GET'])]
    public function show(Permis $permis): Response
    {
        return $this->render('permis/show.html.twig', [
            'permi' => $permis,
        ]);
    }

    #[Route('/{id_permis}/edit', name: 'app_permis_edit2', methods: ['GET', 'POST'])]
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

    #[Route('/{id_permis}', name: 'app_permis_delete', methods: ['POST'])]
    public function delete(Request $request, Permis $permis, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $permis->getIdPermis(), $request->request->get('_token'))) {
            $entityManager->remove($permis);
            $entityManager->flush();
            $this->addFlash('success', 'Permis supprimé avec succès');
        }

        return $this->redirectToRoute('app_about_permisAll');
    }


    #[Route('/check-user-quiz/{userId}', name: 'app_check_user_quiz', methods: ['GET'])]
    public function checkUserQuiz(int $userId, QuizRepository $quizRepository): JsonResponse
    {
        $quiz = $quizRepository->findOneBy(['idUser' => $userId, 'statut' => 'Passed']);

        return $this->json([
            'hasPassedQuiz' => $quiz !== null,
            'quizId' => $quiz ? $quiz->getId() : null
        ]);
    }
}
