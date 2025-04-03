<?php

namespace App\Controller;

use App\Entity\Permis;
use App\Form\PermisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/permis')]
final class PermisController extends AbstractController
{
    #[Route(name: 'app_permis_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $permis = $entityManager
            ->getRepository(Permis::class)
            ->findAll();

        return $this->render('permis/index.html.twig', [
            'permis' => $permis,
        ]);
    }

    #[Route('/new', name: 'app_permis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $permi = new Permis();
        $form = $this->createForm(PermisType::class, $permi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($permi);
            $entityManager->flush();

            return $this->redirectToRoute('app_permis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('permis/new.html.twig', [
            'permi' => $permi,
            'form' => $form,
        ]);
    }

    #[Route('/{id_permis}', name: 'app_permis_show', methods: ['GET'])]
    public function show(Permis $permi): Response
    {
        return $this->render('permis/show.html.twig', [
            'permi' => $permi,
        ]);
    }

    #[Route('/{id_permis}/edit', name: 'app_permis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Permis $permi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PermisType::class, $permi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_permis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('permis/edit.html.twig', [
            'permi' => $permi,
            'form' => $form,
        ]);
    }

    #[Route('/{id_permis}', name: 'app_permis_delete', methods: ['POST'])]
    public function delete(Request $request, Permis $permi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$permi->getIdPermis(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($permi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_permis_index', [], Response::HTTP_SEE_OTHER);
    }
}
