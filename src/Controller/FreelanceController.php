<?php

namespace App\Controller;

use App\Entity\Freelance;
use App\Form\FreelanceType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FreelanceRepository;

#[Route('/freelance')]
class FreelanceController extends AbstractController
{
    #[Route('/', name: 'app_freelance_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $freelances = $entityManager
            ->getRepository(Freelance::class)
            ->findAll();

        return $this->render('freelance/index.html.twig', [
            'freelances' => $freelances,
        ]);
    }

    #[Route('/{idBO}/myOffersBO', name: 'app_freelance_myOffersBO', methods: ['GET'])]
    public function myOffers(FreelanceRepository $FreelanceRepo,$idBO): Response
    {
        $myOffers = $FreelanceRepo->findBy(['idbo' => $idBO]);

        return $this->render('freelance/myOffers.html.twig', [
            'freelances' => $myOffers,
        ]);
    }

    #[Route('/Freelancer', name: 'app_freelance_indexFree', methods: ['GET'])]
    public function indexFree(EntityManagerInterface $entityManager): Response
    {
        $freelances = $entityManager
            ->getRepository(Freelance::class)
            ->findAll();

        return $this->render('freelance/indexFree.html.twig', [
            'freelances' => $freelances,
        ]);
    }

    #[Route('/new', name: 'app_freelance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $freelance = new Freelance();
        $freelance->setAdddate(new DateTime());
        $freelance->setState(true);
        $freelance->setNbapplicants(0);
        $form = $this->createForm(FreelanceType::class, $freelance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                $logoPath = $logoFile->getPathname();
                $freelance->setUrllogo($logoPath);
            }
            $entityManager->persist($freelance);
            $entityManager->flush();

            return $this->redirectToRoute('app_freelance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('freelance/new.html.twig', [
            'freelance' => $freelance,
            'form' => $form,
        ]);
    }

    #[Route('/{idfreelance}/{idBO}', name: 'app_freelance_show', methods: ['GET'])]
    public function show(FreelanceRepository $FreelanceRepo,$idfreelance,$idBO): Response
    {
        $idBO=20;
    
        // get the offer with the specified ID
        $freelance = $FreelanceRepo->find($idfreelance);
        
        // check if the current user is the owner of the offer
        $isOwner = $freelance->getIdbo() === $idBO;

        return $this->render('freelance/show.html.twig', [
            'freelance' => $freelance,
            'is_owner' => $isOwner, // pass a variable to the template indicating if the user is the owner of the offer
        ]);
    }

    #[Route('/Freelancer/{idfreelance}', name: 'app_freelance_showFree', methods: ['GET'])]
    public function showFree(FreelanceRepository $FreelanceRepo,$idfreelance): Response
    {
        $freelance = $FreelanceRepo->find($idfreelance);
        return $this->render('freelance/showFree.html.twig', [
            'freelance' => $freelance,
        ]);
    }

    #[Route('/{idfreelance}/edit', name: 'app_freelance_edit', methods: ['GET', 'POST'])]
    public function edit(FreelanceRepository $FreelanceRepo,Request $request, $idfreelance, EntityManagerInterface $entityManager): Response
    {
        $freelance = $FreelanceRepo->find($idfreelance);
        $form = $this->createForm(FreelanceType::class, $freelance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_freelance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('freelance/edit.html.twig', [
            'freelance' => $freelance,
            'form' => $form,
        ]);
    }

    #[Route('/{idfreelance}', name: 'app_freelance_delete', methods: ['POST'])]
    public function delete(FreelanceRepository $FreelanceRepo,Request $request,$idfreelance, EntityManagerInterface $entityManager): Response
    {
        $freelance = $FreelanceRepo->find($idfreelance);
        if ($this->isCsrfTokenValid('delete'.$freelance->getIdfreelance(), $request->request->get('_token'))) {
            $entityManager->remove($freelance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_freelance_index', [], Response::HTTP_SEE_OTHER);
    }
}
