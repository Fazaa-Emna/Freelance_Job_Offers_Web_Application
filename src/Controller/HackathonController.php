<?php

namespace App\Controller;

use App\Entity\Hackathon;
use App\Entity\Event;
use App\Form\EventType;
use App\Form\HackathonFilterType;
use App\Form\HackathonType;
use App\Repository\HackathonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\MailerService;
use App\Services\QRCodeService;
use Knp\Component\Pager\PaginatorInterface;
#[Route('/hackathon')]
class HackathonController extends AbstractController
{
    #[Route('/', name: 'app_hackathon_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request,HackathonRepository $hackathonRepository,PaginatorInterface $paginator): Response
    {
        /*$events = $entityManager
            ->getRepository(Event::class)
            ->findAll();*/
        $form = $this->createForm(HackathonFilterType::class);
        $queries = $request->query->all();
       
        $query = $request->query->get('query');
        $hackathons = [];

        if ($query) {
            $hackathons = $this->getDoctrine()->getRepository(Hackathon::class)
                ->createQueryBuilder('h')
                ->join('h.event', 'e')
                ->where('e.eventName LIKE :query')
                ->setParameter('query', "%{$query}%")
                ->getQuery()
                ->getResult();
        } else {
            $hackathons = $this->getDoctrine()->getRepository(Hackathon::class)->findAll();
        }

        //$hackathonName = $queries['inputName'] ?? '';

        //$hackathons = $hackathonRepository->search($hackathonName);

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'data' => $this->renderView('hackathon/table_content.html.twig', [
                    'hackathons' => $hackathons
                ])
            ]);
        }
        $pagination = $paginator->paginate(
            $hackathons, // query results
            $request->query->getInt('page', 1), // page number
            7 // number of items per page
        );
        return $this->render('hackathon/index.html.twig', [
            'pagination' => $pagination,
            'form' => $form->createView(),
            'query' => $query
        ]);
    }

    #[Route('/Hackathon', name: 'app_hackathon_hackathon_front', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager,Request $request): Response
    {
        $services = $entityManager
            ->getRepository(Hackathon::class)
            ->findAll();
        $query = $request->query->get('query');
        $hackathons = [];

        if ($query) {
            $services = $this->getDoctrine()->getRepository(Hackathon::class)
                ->createQueryBuilder('h')
                ->where('h.event.eventName LIKE :query')
                ->setParameter('query', "%{$query}%")
                ->getQuery()
                ->getResult();
        } else {
            $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        }

        return $this->render('hackathon/hackathon_front.html.twig', [
            'hackathons' => $hackathons,
            'query' => $query,
        ]);
    }
    #[Route('/new', name: 'app_hackathon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerService $mailerService): Response
    {
        $event = new Event();
        $hackathon = new Hackathon();
        $forma = $this->createForm(EventType::class, $event);
        $form = $this->createForm(HackathonType::class, $hackathon);
        $forma->handleRequest($request);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event=$hackathon->getEvent();
            $entityManager->persist($event);

            $mailerService->send("Hackathon has changed", "nassim.benali@esprit.tn", "mehdi.fathallah69@gmail.com", "hackathon/email.html.twig", [
                "name" => $hackathon->getEvent()->getEventName(),
                "location" => $hackathon->getEvent()->getLocation()
            ]);

            //$hackathon->setEvent($event);
            $entityManager->persist($hackathon);

            $entityManager->flush();

            return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hackathon/new.html.twig', [
            'event' => $event,
            'hackathon' => $hackathon,
            'form' => $form,
        ]);
    }



    #[Route('/{hackathon}', name: 'app_hackathon_show', methods: ['GET'])]
    public function show(Hackathon $hackathon, QRCodeService $qrCodeService,BuilderInterface $qrBuilder ): Response
    {
        //dd($hackathon);
        $path = dirname(__DIR__, 2).'/public/uploads/';

        $data ='Hackathon name: '.$hackathon->getEvent()->getEventName()."\n\n".'description:'.$hackathon->getEvent()->getDescription()."\n"."\n". 'Location: '.$hackathon->getEvent()->getLocation();
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
        return $this->render('hackathon/show.html.twig', [
            'hackathon' => $hackathon,
            'qrCode'=>$base64Data,
        ]);
    }

    #[Route('/hackathon/{hackathon}/edit', name: 'app_hackathon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hackathon $hackathon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HackathonType::class, $hackathon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hackathon/edit.html.twig', [
            'hackathon' => $hackathon,
            'form' => $form,
        ]);
    }

    #[Route('/{event}', name: 'app_hackathon_delete', methods: ['POST'])]
    public function delete(Request $request, Hackathon $hackathon, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hackathon->getEvent(),$request->request->get('_token'))) {
            $entityManager->remove($hackathon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
    }



}
