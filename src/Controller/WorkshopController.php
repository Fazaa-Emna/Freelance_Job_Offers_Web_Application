<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Hackathon;
use App\Entity\Workshop;
use App\Form\EventType;
use App\Form\HackathonType;
use App\Form\WorkshopType;
use App\Services\MailerService;
use App\Services\QRCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/workshop')]
class WorkshopController extends AbstractController
{
    #[Route('/', name: 'app_workshop_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $workshops = $entityManager
            ->getRepository(Workshop::class)
            ->findAll();

        return $this->render('workshop/index.html.twig', [
            'workshops' => $workshops,
        ]);
    }

    #[Route('/new', name: 'app_workshop_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerService $mailerService): Response
    {
        $event = new Event();
        $workshop = new Workshop();
        $forma = $this->createForm(EventType::class, $event);
        $form = $this->createForm(WorkshopType::class, $workshop);
        $forma->handleRequest($request);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event=$workshop->getEvent();
            $entityManager->persist($event);

            $mailerService->send("Workshop has been added", "nassim.benali@esprit.tn", "mehdi.fathallah69@gmail.com", "workshop/email.html.twig", [
                "name" => $workshop->getEvent()->getEventName(),
                "location" => $workshop->getEvent()->getLocation()
            ]);

            //$hackathon->setEvent($event);
            $entityManager->persist($workshop);

            $entityManager->flush();

            return $this->redirectToRoute('app_workshop_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('workshop/new.html.twig', [
            'event' => $event,
            'workshop' => $workshop,
            'form' => $form,
        ]);
    }

    #[Route('/{workshop}', name: 'app_workshop_show', methods: ['GET'])]
    public function show(Workshop $workshop, QRCodeService $qrCodeService,BuilderInterface $qrBuilder): Response
    {
        //dd($hackathon);
        $path = dirname(__DIR__, 2).'/public/uploads/';

        $data ='Workshop name: '.$workshop->getEvent()->getEventName()."\n\n".'description:'.$workshop->getEvent()->getDescription()."\n"."\n". 'Location: '.$workshop->getEvent()->getLocation();
        $qrResult = $qrBuilder
            ->size(300)
            ->margin(10)
            ->encoding(new Encoding('UTF-8'))
            ->data($data)
            ->logoPath($path.'logo.png')
            ->logoResizeToWidth('100')
            ->logoResizeToHeight('100')
            ->backgroundColor(new Color(223, 242, 255))
            ->build();

        $base64Data = $qrResult->getDataUri();
        return $this->render('workshop/show.html.twig', [
            'workshop' => $workshop,
            'qrCode'=>$base64Data,
        ]);
    }

    #[Route('/{workshop}/edit', name: 'app_workshop_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WorkshopType::class, $workshop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_workshop_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('workshop/edit.html.twig', [
            'workshop' => $workshop,
            'form' => $form,
        ]);
    }

    #[Route('/{event}', name: 'app_workshop_delete', methods: ['POST'])]
    public function delete(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$workshop->getEvent(), $request->request->get('_token'))) {
            $entityManager->remove($workshop);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_workshop_index', [], Response::HTTP_SEE_OTHER);
    }
}
