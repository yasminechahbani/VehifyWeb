<?php

namespace App\Controller;

use App\Entity\CarteGrise;
use App\Form\CarteGrise1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/carte/grise')]
final class CarteGriseController extends AbstractController
{
    #[Route(name: 'app_carte_grise_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $carteGrises = $entityManager
            ->getRepository(CarteGrise::class)
            ->findAll();

        return $this->render('FrontOffice/carte_grise/index.html.twig', [
            'carte_grises' => $carteGrises,
        ]);
    }

    #[Route('/new', name: 'app_carte_grise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carteGrise = new CarteGrise();
        $form = $this->createForm(CarteGrise1Type::class, $carteGrise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($carteGrise);
            $entityManager->flush();

            return $this->redirectToRoute('app_carte_grise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/carte_grise/new.html.twig', [
            'carte_grise' => $carteGrise,
            'form' => $form,
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

        return $this->render('FrontOffice/carte_grise/show.html.twig', [
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

        return $this->render('FrontOffice/carte_grise/edit.html.twig', [
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
