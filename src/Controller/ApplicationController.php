<?php

namespace App\Controller;

use App\Entity\Application;
use App\Form\ApplicationType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FreelanceRepository;
use App\Repository\ApplicationRepository;


#[Route('/application')]
class ApplicationController extends AbstractController
{
    #[Route('/', name: 'app_application_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $applications = $entityManager
            ->getRepository(Application::class)
            ->findAll();

        return $this->render('application/index.html.twig', [
            'applications' => $applications,
        ]);
    }

    #[Route('/{idOffer}/new', name: 'app_application_new', methods: ['GET', 'POST'])]
    public function new($idOffer,FreelanceRepository $FreelanceRepo,Request $request, EntityManagerInterface $entityManager): Response
    {
        $application = new Application();
        $freelance = $FreelanceRepo->find($idOffer);
        $application->setIdfreelance($freelance);
        $application->setIdbo($freelance->getIdbo());
        $application->setApplicationDate(new DateTime());
        $application->setConfirmation(false);
        $application->setNotification(false);
        $form = $this->createForm(ApplicationType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cvFile = $form->get('urlCv')->getData();
            if ($cvFile) {
                $cvPath = $cvFile->getPathname();
                $application->setUrlCv($cvPath);
            }
            $entityManager->persist($application);
            $entityManager->flush();

            return $this->redirectToRoute('app_freelance_showFree',['idfreelance'=>$freelance->getIdfreelance()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('application/new.html.twig', [
            'application' => $application,
            'form' => $form,
            'idfreelance'=>$freelance->getIdfreelance(),
        ]);
    }

    #[Route('/{idFreelance}', name: 'app_application_showSecific', methods: ['GET'])]
    public function show(ApplicationRepository $AppRepo,FreelanceRepository $FreelanceRepo, $idFreelance, EntityManagerInterface $entityManager): Response
    {
        $freelance=$FreelanceRepo->find($idFreelance);
        $applications = $AppRepo->findBy(['idfreelance' => $freelance]);
        
        return $this->render('application/index.html.twig', [
            'applications' => $applications,
        ]);
    }

    #[Route('/{idapp}/edit', name: 'app_application_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Application $application, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ApplicationType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_application_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('application/edit.html.twig', [
            'application' => $application,
            'form' => $form,
        ]);
    }

    #[Route('/{idapp}/select', name: 'app_application_select', methods: ['GET', 'POST'])]
    public function select(ApplicationRepository $AppRepo,Request $request, $idapp, EntityManagerInterface $entityManager): Response
    {
        $applications = $entityManager
            ->getRepository(Application::class)
            ->findAll();
            
        $app = $AppRepo->find($idapp);
        $app->setConfirmation(true);
        $app->setNotification(true);
        $entityManager->persist($app);
        $entityManager->flush();
        return $this->render('application/index.html.twig', [
            'applications' => $applications,
        ]);
    }

    #[Route('/{idapp}', name: 'app_application_delete', methods: ['POST'])]
    public function delete(Request $request, Application $application, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$application->getIdapp(), $request->request->get('_token'))) {
            $entityManager->remove($application);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_application_index', [], Response::HTTP_SEE_OTHER);
    }
}