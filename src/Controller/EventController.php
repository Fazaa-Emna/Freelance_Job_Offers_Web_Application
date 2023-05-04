<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventFilterType;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Services\MailerService;
use App\Services\QRCodeService;
use ContainerGFh4RKO\getEventFilterTypeService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request,EventRepository $eventRepository,PaginatorInterface $paginator): Response
    {
        /*$events = $entityManager
            ->getRepository(Event::class)
            ->findAll();*/
        $form = $this->createForm(EventFilterType::class);
        $queries = $request->query->all();

        $query = $request->query->get('query');
        $events = [];

        if ($query) {
            $events = $this->getDoctrine()->getRepository(Event::class)
                ->createQueryBuilder('e')
                ->where('e.eventName LIKE :query')
                ->setParameter('query', "%{$query}%")
                ->getQuery()
                ->getResult();
        } else {
            $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        }

        $eventName = $queries['inputName'] ?? '';

        //$events = $eventRepository->search($eventName);

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'data' => $this->renderView('event/table_content.html.twig', [
                    'events' => $events
                ])
            ]);
        }
        $pagination = $paginator->paginate(
            $events, // query results
            $request->query->getInt('page', 1), // page number
            7 // number of items per page
        );

        return $this->render('event/index.html.twig', [
           
            'form' => $form->createView(),
            'query' => $query,
            'pagination' => $pagination,
        ]);
    }

    #[Route('/back', name: 'app_event_index_back', methods: ['GET'])]
    public function indexBack(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('eventback/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/Event', name: 'app_event_event_front', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager,Request $request): Response
    {
        $services = $entityManager
            ->getRepository(Event::class)
            ->findAll();
        $query = $request->query->get('query');
        $events = [];

        if ($query) {
            $services = $this->getDoctrine()->getRepository(Event::class)
                ->createQueryBuilder('e')
                ->where('e.eventName LIKE :query')
                ->setParameter('query', "%{$query}%")
                ->getQuery()
                ->getResult();
        } else {
            $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        }

        return $this->render('event/event_front.html.twig', [
            'events' => $events,
            'query' => $query,
        ]);
    }
    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MailerService $mailerService): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mailerService->send("a new Event has been added","nassim.benali@esprit.tn","mehdi.fathallah69@gmail.com","hackathon/email.html.twig",[
                "name" => $event->getEventName(),
                "location" => $event->getLocation()
            ]);
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{eventId}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event, QRCodeService $qrCodeService,BuilderInterface $qrBuilder): Response
    {
        $path = dirname(__DIR__, 2).'/public/uploads/';
       $data ='Event name: '.$event->getEventName()."\n\n".'description:'.$event->getDescription()."\n"."\n". 'Location: '.$event->getLocation();
        $qrResult = $qrBuilder
            ->size(300)
            ->margin(10)
            ->encoding(new Encoding('UTF-8'))
            ->data($data)
            //->logoPath($path.'logo.png')
            //->logoResizeToWidth('100')
            //->logoResizeToHeight('100')
            ->backgroundColor(new Color(223, 242, 255))
            ->build();

        $base64Data = $qrResult->getDataUri();
        return $this->render('event/show.html.twig', [
            'event' => $event,
            'qrCode'=>$base64Data,
        ]);
    }

    #[Route('/{eventId}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{eventId}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getEventId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }
    public function searchOrdonnance(Request $request, EventRepository $eventRepository)
    {
        $query = $request->query->get('query');

        $events = $eventRepository->search($query);

        // Return the search results as a JSON response
        return $this->json(['data' => $events]);
    }
}
