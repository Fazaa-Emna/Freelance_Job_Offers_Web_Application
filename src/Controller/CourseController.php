<?php

namespace App\Controller;
use TCPDF;

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
#[Route('/course')]
class CourseController extends AbstractController
{
   
    #[Route('/', name: 'app_course_index', methods: ['GET','POST'])]
    public function index(Request $request,CourseRepository $courseRepository ): Response
    {
    
        $searchTerm = $request->request->get('searchTerm');
    
    if ($searchTerm) {
        $courses = $this->getDoctrine()->getRepository(Course::class)->searchByName($searchTerm);
    } else {
        $courses = $this->getDoctrine()->getRepository(Course::class)->findAll();
    }

    if ($request->isXmlHttpRequest()) {
        return $this->render('course/_course_list.html.twig', array(
            'courses' => $courses
        ));
    }

    return $this->render('course/index.html.twig', array(
        'courses' => $courses
    ));
   
    
    }
   
    #[Route('/courses', name: 'app_course_front', methods: ['GET'])]
    public function indexFront(CourseRepository $courseRepository,Request $request,PaginatorInterface $paginator): Response
    {
       
        $courses = $this->getDoctrine()->getRepository(Course::class)->findAll();
        $pagination = $paginator->paginate(
            $courses, // query results
            $request->query->getInt('page', 1), // page number
            1 // number of items per page
        );

            // Get all courses if the search form was not submitted
          
            return $this->render('course/course_front.html.twig', [
                'courses' => $courseRepository->findAll(),
                'pagination' => $pagination

            ]);
    
      
    }
    #[Route('/new', name: 'app_course_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CourseRepository $courseRepository): Response
    {
        $course = new Course();
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $photoFileName = uniqid().'.'.$photoFile->guessExtension();

                $photoFile->move(
                    $this->getParameter('images_directory'),
                    $photoFileName
                );
                // Set the photoPath property of the Course entity
                $course->setPhoto($photoFileName);
            $courseRepository->save($course, true);

            return $this->redirectToRoute('app_lesson_course', [], Response::HTTP_SEE_OTHER);
        }
    }
        return $this->renderForm('course/new.html.twig', [
            'course' => $course,
            'form' => $form,
        ]);
    }
   

    #[Route('/{cid}', name: 'app_course_show', methods: ['GET'])]
    public function show(Course $course): Response
    {
      
        return $this->render('course/show.html.twig', [
            'course' => $course,
           
        ]);
    }

    #[Route('/{cid}/edit', name: 'app_course_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Course $course, CourseRepository $courseRepository): Response
    {
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $courseRepository->save($course, true);

            return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('course/edit.html.twig', [
            'course' => $course,
            'form' => $form,
        ]);
    }

    #[Route('/{cid}', name: 'app_course_delete', methods: ['POST'])]
    public function delete(Request $request, Course $course, CourseRepository $courseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$course->getCid(), $request->request->get('_token'))) {
            $courseRepository->remove($course, true);
        }

        return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/search', name: 'search')]
    public function search(Request $request,NormalizerInterface $Normalizer)
    {
    $repository = $this->getDoctrine()->getRepository(Student::class);
    $requestString=$request->get('searchValue');
    $students = $repository->findStudentByNsc($requestString);
    $jsonContent = $Normalizer->normalize($students, 'json',['groups'=>'courses']);
    $retour=json_encode($jsonContent);
    return new Response($retour);
    }
    #[Route('/filter', name: 'filter')]
    public function filter(Request $request,NormalizerInterface $Normalizer)
    {
    $repository = $this->getDoctrine()->getRepository(Student::class);
    $requestString=$request->get('searchValue');
    $students = $repository->findStudentByNsc($requestString);
    $jsonContent = $Normalizer->normalize($students, 'json',['groups'=>'courses']);
    $retour=json_encode($jsonContent);
    return new Response($retour);
    }
    /**
     * @Route("/pdf", name="pdf")
     */
    public function pdf(): Response
    {
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        $pdf->SetHeaderFont(Array('helvetica', '', 10));
        $pdf->SetFooterFont(Array('helvetica', '', 8));
        $pdf->SetDefaultMonospacedFont('courier');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->setImageScale(1);
        $pdf->AddPage();
        
        // Add the icon to the PDF
        $pdf->Image('assets/img/logo/m.png', 10, 10, '', '', '', '', 'T', false, 300, '', false, false, 0, false, false, false);
     
        $pdf->SetFont('times', 'BI', 20);
        $pdf->Cell(0, 10, 'Hello, world!', 0, 1);
        $pdf->Output('hello_world.pdf', 'D');
    
    }
    
  
}
