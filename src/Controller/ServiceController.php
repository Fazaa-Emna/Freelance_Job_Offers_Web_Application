<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\JsonResponse;


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
    
            $data = [];
            $totalsByCategory = [];

            // Loop over each service and group them by category, calculating the total price for each category
            foreach ($services as $service) {
                $category = $service->getCat();
                $price = $service->getPrix();
    
                if (!isset($totalsByCategory[$category])) {
                    $totalsByCategory[$category] = 0;
                }
    
                $totalsByCategory[$category] += $price;
            }
    
            // Sort the categories alphabetically
            ksort($totalsByCategory);
    
            // Extract the category names and totals
            $labels = [];
            $data = [];
    
            foreach ($totalsByCategory as $category => $total) {
                $labels[] = $category;
                $data[] = $total;
            }
            return $this->render('service/index.html.twig', [
                'services' => $services,
                'query' => $query,
                'chartData' => json_encode($data),
        ]); 

    
    }


    #[Route('/services', name: 'app_service_service_front', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
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
    
            $pagination = $paginator->paginate(
                $services, // query results
                $request->query->getInt('page', 1), // page number
                3 // number of items per page
            );
            return $this->render('service/service_front.html.twig', [
                'services' => $services,
                'query' => $query,
                'pagination' => $pagination
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

    #[Route('/service/{id}/packag', name: 'app_packag_service_front', methods: ['GET', 'POST'])]
    public function showPackagsByServiceFront($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $packags = $entityManager->createQueryBuilder()
            ->select('l', 'c')
            ->from('App\Entity\Packag', 'l')
            ->join('l.sid', 'c')
            ->where('c.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
        
        return $this->render('packag/index.html.twig', [
            'packags' => $packags,
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
