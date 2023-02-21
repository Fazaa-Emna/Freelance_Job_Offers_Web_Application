<?php

namespace App\Controller;

use App\Entity\Classroom;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    #[Route('/listclassroom', name: 'listclassroom')]
    public function list(PersistenceManagerRegistry $doctrine): Response
    {
        $classroomRepo=$doctrine->getRepository(Classroom::class);
        $classrooms=$classroomRepo->findAll();
        
        return $this->render('classroom/list1.html.twig', [
            'classrooms' => $classrooms,
        ]);
    }
}
