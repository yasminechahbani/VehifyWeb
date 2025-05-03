<?php

namespace App\Controller;
use App\Entity\CarteGrise;
use App\Entity\User;
use App\Form\CarteGrise1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/carte/grise')]
final class CarteGriseController extends AbstractController
{
    #[Route(name: 'app_carte_grise_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $userId = $session->get('id');
        if (!$userId) {
            throw $this->createAccessDeniedException('You must be logged in to view this page.');
        }
        $carteGrises = $entityManager
            ->getRepository(CarteGrise::class)
            ->findBy(['user' => $userId]);

        return $this->render('carte_grise/index.html.twig', [
            'carte_grises' => $carteGrises,
        ]);
    }

    #[Route('/new', name: 'app_carte_grise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,SessionInterface $session): Response
    {
        $carteGrise = new CarteGrise();
        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);
        $userId = $session->get('id');
        if ($userId) {
            $user = $entityManager->getRepository(User::class)->find($userId);
            if ($user) {
                $carteGrise->setUser($user);
            }
        }
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                // Vérifie si un numéro de carte grise identique existe déjà
                $existing = $entityManager->getRepository(CarteGrise::class)->findOneBy([
                    'numeroCarteGrise' => $carteGrise->getNumeroCarteGrise(),
                ]);
                if ($existing) {
                    $this->addFlash('error', 'Ce numéro de carte grise existe déjà.');
                } else {
                    $entityManager->persist($carteGrise);
                    $entityManager->flush();

                    $this->addFlash('success', 'Carte grise ajoutée avec succès !');
                    return $this->redirectToRoute('app_carte_grise_index');
                }
            } else {
                $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
            }
        }

        return $this->render('carte_grise/new.html.twig', [
            'carte_grise' => $carteGrise,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_carte_grise}', name: 'app_carte_grise_show', methods: ['GET'])]
    public function show(int $id_carte_grise, EntityManagerInterface $entityManager): Response
    {
        // Récupère l'entité CarteGrise en fonction de l'ID
        $carteGrise = $entityManager->getRepository(CarteGrise::class)->find($id_carte_grise);

        // Si l'entité n'est pas trouvée, lancer une exception
        if (!$carteGrise) {
            throw $this->createNotFoundException('Carte grise non trouvée.');
        }

        return $this->render('carte_grise/show.html.twig', [
            'carte_grise' => $carteGrise,
        ]);
    }

    #[Route('/{idCarteGrise}/edit', name: 'app_carte_grise_edit', methods: ['GET', 'POST'])]
    public function edit(int $idCarteGrise, Request $request, EntityManagerInterface $entityManager): Response
    {
        $carteGrise = $entityManager->getRepository(CarteGrise::class)->find($idCarteGrise);

        if (!$carteGrise) {
            throw $this->createNotFoundException('Carte grise non trouvée.');
        }

        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_carte_grise_index');
        }

        return $this->render('carte_grise/edit.html.twig', [
            'carte_grise' => $carteGrise,
            'form' => $form,
        ]);
    }

    #[Route('/{id_carte_grise}/delete', name: 'app_carte_grise_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        int $id_carte_grise,  // Doit correspondre au nom dans la route
        EntityManagerInterface $entityManager
    ): Response {
        $carteGrise = $entityManager->getRepository(CarteGrise::class)->find($id_carte_grise);

        if (!$carteGrise) {
            throw $this->createNotFoundException('Carte grise non trouvée');
        }

        if ($this->isCsrfTokenValid('delete'.$id_carte_grise, $request->request->get('_token'))) {
            $entityManager->remove($carteGrise);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_carte_grise_index');
    }
}
