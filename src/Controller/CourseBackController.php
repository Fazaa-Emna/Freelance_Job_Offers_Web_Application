<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\CourseType;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\SearchForm;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class CourseBackController extends AbstractController
{
   // #[Route('/courses/back', name: 'app_course_back')]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('course_back/index.html.twig', [
            'courses' => $courseRepository->findAll() 

        ]);

    
    }
}
