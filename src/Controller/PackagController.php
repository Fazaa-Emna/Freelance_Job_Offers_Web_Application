<?php

namespace App\Controller;

use App\Entity\Packag;
use App\Form\PackagType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/packag')]
class PackagController extends AbstractController
{
    #[Route('/', name: 'app_packag_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $packags = $entityManager
            ->getRepository(Packag::class)
            ->findAll();

        return $this->render('packag/index.html.twig', [
            'packags' => $packags,
        ]);
    }

    #[Route('/new', name: 'app_packag_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $packag = new Packag();
        $form = $this->createForm(PackagType::class, $packag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($packag);
            $entityManager->flush();

            return $this->redirectToRoute('app_packag_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('packag/new.html.twig', [
            'packag' => $packag,
            'form' => $form,
        ]);
    }

    #[Route('/{idP}', name: 'app_packag_show', methods: ['GET'])]
    public function show(Packag $packag): Response
    {
        return $this->render('packag/show.html.twig', [
            'packag' => $packag,
        ]);
    }

    #[Route('/{idP}/edit', name: 'app_packag_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Packag $packag, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PackagType::class, $packag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_packag_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('packag/edit.html.twig', [
            'packag' => $packag,
            'form' => $form,
        ]);
    }

    #[Route('/{idP}', name: 'app_packag_delete', methods: ['POST'])]
    public function delete(Request $request, Packag $packag, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$packag->getIdP(), $request->request->get('_token'))) {
            $entityManager->remove($packag);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_packag_index', [], Response::HTTP_SEE_OTHER);
    }
}
