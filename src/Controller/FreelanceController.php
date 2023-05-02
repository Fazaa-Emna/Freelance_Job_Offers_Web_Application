<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Freelance;
use App\Entity\Historysearch;
use App\Form\FreelanceType;
use App\Form\SearchForm;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FreelanceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

#[Route('/freelance')]
class FreelanceController extends AbstractController
{
    #[Route('/', name: 'app_freelance_index', methods: ['GET'])]
    public function index(FreelanceRepository $FreelanceRepo, EntityManagerInterface $entityManager, PaginatorInterface $paginator, Request $request): Response
    {
        $data = new SearchData();
        $data->page = $request->query->getInt('page', 1);
        // Get categories from Freelance entity
        $categories = $FreelanceRepo->findCategories();

        $form = $this->createForm(SearchForm::class, $data, [
            'categories' => $categories,
        ]);

        $form->handleRequest($request);
        //dd($data);
        $freelances = $FreelanceRepo->findSearch($data);

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('freelance/_freelances.html.twig', ['freelances' => $freelances]),
                'pagination' => $this->renderView('freelance/_pagination.html.twig', ['freelances' => $freelances])
            ]);
        }
        return $this->render('freelance/index.html.twig', [
            'freelances' => $freelances,
            'form' => $form->createView(),
            'page' => $data->page,
            'max' => 4,
        ]);
    }

    #[Route('/{idBO}/myOffersBO', name: 'app_freelance_myOffersBO', methods: ['GET'])]
    public function myOffers(FreelanceRepository $FreelanceRepo, $idBO): Response
    {
        $myOffers = $FreelanceRepo->findBy(['idbo' => $idBO]);

        return $this->render('freelance/myOffers.html.twig', [
            'freelances' => $myOffers,
        ]);
    }

    #[Route('/Freelancer', name: 'app_freelance_indexFree', methods: ['GET'])]
    public function indexFree(Request $request, FreelanceRepository $FreelanceRepo, EntityManagerInterface $entityManager): Response
    {
        $this->executePythonScript();
        $data = new SearchData();
        $data->page = $request->query->getInt('page', 1);
        // Get categories from Freelance entity
        $categories = $FreelanceRepo->findCategories();

        $form = $this->createForm(SearchForm::class, $data, [
            'categories' => $categories,
        ]);

        $form->handleRequest($request);
        //dd($data);
        $freelances = $FreelanceRepo->findSearch($data);

        if ($form->isSubmitted()) {
            $resultIds = array();
            foreach ($freelances as $freelance) {
                $resultIds[] = $freelance->getIdfreelance();
            }

            $searchQuery = $request->query->get('q');

            $searchHistory = new Historysearch();
            $searchHistory->setSearchdate(new DateTime());

            $searchHistory->setIdUser(20);
            $searchHistory->etSearchs($searchQuery);
            //->setSearch($searchQuery);
            $searchHistory->setResultCount(count($freelances));
            $searchHistory->setResultIds(implode(',', $resultIds));

            $entityManager->persist($searchHistory);
            $entityManager->flush();
        }

        return $this->render('freelance/indexFree.html.twig', [
            'freelances' => $freelances,
            'form' => $form->createView(),
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
    public function show(FreelanceRepository $FreelanceRepo, $idfreelance, $idBO): Response
    {

        // get the offer with the specified ID
        $freelance = $FreelanceRepo->find($idfreelance);

        // check if the current user is the owner of the offer
        $isOwner = (($freelance->getIdbo()) === intval($idBO));
        //var_dump($isOwner);
        return $this->render('freelance/show.html.twig', [
            'freelance' => $freelance,
            'is_owner' => $isOwner, // pass a variable to the template indicating if the user is the owner of the offer
        ]);
    }

    #[Route('Freelancer/{idfreelance}', name: 'app_freelance_showFree', methods: ['GET'])]
    public function showFree(FreelanceRepository $FreelanceRepo, $idfreelance): Response
    {
        $freelance = $FreelanceRepo->find($idfreelance);
        return $this->render('freelance/showFree.html.twig', [
            'freelance' => $freelance,
        ]);
    }

    #[Route('editOffer/{idfreelance}', name: 'app_freelance_edit', methods: ['GET', 'POST'])]
    public function edit(FreelanceRepository $FreelanceRepo, Request $request, $idfreelance, EntityManagerInterface $entityManager): Response
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
    public function delete(FreelanceRepository $FreelanceRepo, Request $request, $idfreelance, EntityManagerInterface $entityManager): Response
    {
        $freelance = $FreelanceRepo->find($idfreelance);
        if ($this->isCsrfTokenValid('delete' . $freelance->getIdfreelance(), $request->request->get('_token'))) {
            $entityManager->remove($freelance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_freelance_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('filter/{category}', name: 'app_freelance_searchCategory', methods: ['GET'])]
    public function searchCategory($category, FreelanceRepository $FreelanceRepo, Request $request): Response
    {
        $FoundFreelances = $FreelanceRepo->searchCategory($category);

        return $this->render('freelance/searchIndex.html.twig', [
            'freelances' => $FoundFreelances,
        ]);
    }

    #[Route('filterByDate/{date}', name: 'app_freelance_searchDate', methods: ['GET'])]
    public function searchByDate($date, FreelanceRepository $freelanceRepository)
    {
        // Call the repository method to get freelancers that were posted within the selected date range
        $freelances = $freelanceRepository->findByDateRange($date);

        // Render the template with the filtered freelancers
        return $this->render('freelance/searchIndex.html.twig', [
            'freelances' => $freelances,
        ]);
    }
    #[Route('RecommendedForYou/py', name: 'app_freelance_recommend', methods: ['GET'])]
    public function recommendation(FreelanceRepository $FreelanceRepo, Request $request)
    {
        $data = new SearchData();
        $data->page = $request->query->getInt('page', 1);
        // Get categories from Freelance entity
        $categories = $FreelanceRepo->findCategories();

        $form = $this->createForm(SearchForm::class, $data, [
            'categories' => $categories,
        ]);

        $filePath = 'assets\Recommendation.txt';
        $id = intval(file_get_contents($filePath));
        $freelances = $FreelanceRepo->findBy(['idfreelance' => $id]);

        return $this->render('freelance/indexFree.html.twig', [
            'freelances' => $freelances,
            'form' => $form->createView(),
        ]);
    }

    private function executePythonScript()
    {
        $pythonScriptPath = 'recommendOffer.py';

        $process = new Process(['python', $pythonScriptPath]);
        $process->setWorkingDirectory('C:\Users\Zahra\OneDrive\Bureau\integrate\Instalance-Web');

        try {
            $process->run();
            echo $process->getOutput();
        } catch (ProcessFailedException $exception) {
            echo $exception->getMessage();
        }
    }
}
