<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'app_service_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();
            $query = $request->query->get('query');
            $services = [];
    
            if ($query) {
                $services = $this->getDoctrine()->getRepository(Service::class)
                    ->createQueryBuilder('s')
                    ->where('s.name LIKE :query')
                    ->setParameter('query', "%{$query}%")
                    ->getQuery()
                    ->getResult();
            } else {
                $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
            }
    
            return $this->render('service/index.html.twig', [
                'services' => $services,
                'query' => $query,
        ]); 

    
    }
    #[Route('/services', name: 'app_service_service_front', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager,Request $request): Response
    {
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();
            $query = $request->query->get('query');
            $services = [];
    
            if ($query) {
                $services = $this->getDoctrine()->getRepository(Service::class)
                    ->createQueryBuilder('s')
                    ->where('s.name LIKE :query')
                    ->setParameter('query', "%{$query}%")
                    ->getQuery()
                    ->getResult();
            } else {
                $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
            }
    
            return $this->render('service/service_front.html.twig', [
                'services' => $services,
                'query' => $query,
        ]); 
    }
    #[Route('/new', name: 'app_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('file')->getData();

            // Generate a unique name for the image file
            $fileName = md5(uniqid()).'.'.$imageFile->guessExtension();

            // Move the file to the directory where images are stored
            $imageFile->move(
                $this->getParameter('images_directory'),
                $fileName
            );

            // Update the entity with the image file name
            $service->setFile($fileName);
            $entityManager->persist($service);
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/new.html.twig', [
            'service' => $service,
            'form' => $form,
            
        ]);
    }

    #[Route('/{id}', name: 'app_service_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        return $this->render('service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
