<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/serve')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'app_serve_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();

        return $this->render('service/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/new', name: 'app_serve_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($service);
            $entityManager->flush();

            $this->addFlash('success', 'Service créé avec succès!');

            return $this->redirectToRoute('app_serve_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('service/new.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id_service}', name: 'app_serve_show', methods: ['GET'])]
    public function show(int $id_service, EntityManagerInterface $entityManager): Response
    {
        $service = $entityManager->getRepository(Service::class)->find($id_service);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        return $this->render('service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id_service}/edit', name: 'app_serve_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id_service, EntityManagerInterface $entityManager): Response
    {
        $service = $entityManager->getRepository(Service::class)->find($id_service);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Service mis à jour avec succès!');

            return $this->redirectToRoute('app_serve_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id_service}', name: 'app_serve_delete', methods: ['POST'])]
    public function delete(Request $request, int $id_service, EntityManagerInterface $entityManager): Response
    {
        $service = $entityManager->getRepository(Service::class)->find($id_service);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        if ($this->isCsrfTokenValid('delete'.$service->getId_service(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
            
            $this->addFlash('success', 'Service supprimé avec succès!');
        }

        return $this->redirectToRoute('app_serve_index', [], Response::HTTP_SEE_OTHER);
    }
}