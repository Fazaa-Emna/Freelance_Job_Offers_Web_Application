<?php

namespace App\Controller;

use App\Entity\Hackathon;
use App\Entity\Event;
use App\Form\HackathonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hackathon')]
class HackathonController extends AbstractController
{
    #[Route('/', name: 'app_hackathon_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $hackathons = $entityManager
            ->getRepository(Hackathon::class)
            ->findAll();

        return $this->render('hackathon/index.html.twig', [
            'hackathons' => $hackathons,
        ]);
    }

    #[Route('/new', name: 'app_hackathon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hackathon = new Hackathon();
        $form = $this->createForm(HackathonType::class, $hackathon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hackathon);
            $entityManager->flush();

            return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hackathon/new.html.twig', [
            'hackathon' => $hackathon,
            'form' => $form,
        ]);
    }

    #[Route('/{event}', name: 'app_hackathon_show', methods: ['GET'])]
    public function show(Hackathon $hackathon): Response
    {
        return $this->render('hackathon/show.html.twig', [
            'hackathon' => $hackathon,
        ]);
    }

    #[Route('/{event}/edit', name: 'app_hackathon_edit', methods: ['GET', 'POST'])]
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
