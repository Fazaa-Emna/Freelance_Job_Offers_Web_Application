<?php

namespace App\Controller;
use App\Entity\Blog;
use App\Entity\Course;
use App\Entity\Service;
use App\Entity\Event;
use App\Entity\Freelance;
use App\Repository\FreelanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CourseType;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\SearchForm;
use App\Repository\CourseRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EventRepository;
use App\Repository\BlogRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
#[Route('/back')]
class BackController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET','POST'])]
    public function index(Request $request ): Response
    {      
        $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
    
        $data = [];
        $totalsByCategory = [];

        // Loop over each service and group them by category, calculating the total price for each category
        foreach ($services as $service) {
            $category = $service->getCat();
            $price = $service->getPrix();

            if (!isset($totalsByCategory[$category])) {
                $totalsByCategory[$category] = 0;
            }

            $totalsByCategory[$category] += $price;
        }

        // Sort the categories alphabetically
        ksort($totalsByCategory);

        // Extract the category names and totals
        $labels = [];
        $data = [];

        foreach ($totalsByCategory as $category => $total) {
            $labels[] = $category;
            $data[] = $total;
        }
  
    return $this->render('back/index.html.twig', [
        'chartData' => json_encode($data),
       
]); 
    }
    #[Route('/courses', name: 'course_index', methods: ['GET','POST'])]
    public function course_index(Request $request,CourseRepository $courseRepository ): Response
    {      
        $courses = $this->getDoctrine()->getRepository(Course::class)->findAll();
    

    return $this->render('back/course.html.twig', array(
        'courses' => $courses
    ));
   
    }
    
    #[Route('/courses/{cid}', name: 'course_delete', methods: ['POST'])]
    public function delete(Request $request, Course $course, CourseRepository $courseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$course->getCid(), $request->request->get('_token'))) {
            $courseRepository->remove($course, true);
        }

        return $this->redirectToRoute('course_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/services', name: 'service_index', methods: ['GET','POST'])]
    public function service_index(Request $request,ServiceRepository $serviceRepository ): Response
    {      
        $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
    

    return $this->render('back/service.html.twig', array(
        'services' => $services
    ));
   
    }
   
    #[Route('/services/{id}', name: 'service_delete', methods: ['POST'])]
    public function deleteS(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteS'.$service->getId(), $request->request->get('_token'))) {
            $serviceRepository->remove($service, true);
        }

        return $this->redirectToRoute('service_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/events', name: 'event_index', methods: ['GET','POST'])]
    public function event_index(Request $request,EventRepository $eventRepository ): Response
    {      
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
    

    return $this->render('back/event.html.twig', array(
        'events' => $events
    ));
   
    }
    
    #[Route('/events/{eventId}', name: 'event_delete', methods: ['POST'])]
    public function deleteE(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteE'.$event->getEventId(), $request->request->get('_token'))) {
            $eventRepository->remove($event, true);
        }

        return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/blogs', name: 'blog_index', methods: ['GET','POST'])]
    public function blog_index(Request $request,BlogRepository $blogRepository ): Response
    {      
        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();
        return $this->render('back/blog.html.twig', array(
        'blogs' => $blogs
         ));
   
    }
    
    #[Route('/blogs/{id}', name: 'blog_delete', methods: ['POST'])]
    public function deleteB(Request $request, Service $service, BlogRepository $blogRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteB'.$freelance->getId(), $request->request->get('_token'))) {
            $blogRepository->remove($blog, true);
        }

        return $this->redirectToRoute('blog_index', [], Response::HTTP_SEE_OTHER);
    }
      
    #[Route('/freelances', name: 'freelance_index', methods: ['GET','POST'])]
    public function freelance_index_index(Request $request,FreelanceRepository $freelanceRepository ): Response
    {      
        $freelances = $this->getDoctrine()->getRepository(Freelance::class)->findAll();
    

    return $this->render('back/freelance.html.twig', array(
        'freelances' => $freelances
    ));
   
    }
    
    #[Route('/freelances/{idfreelance}', name: 'freelance_delete', methods: ['POST'])]
    public function deleteFreelancer(Request $request, Freelance $freelance, FreelanceRepository $freelanceRepository, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('deleteF' . $freelance->getIdfreelance(), $request->request->get('_token'))) {
            $entityManager->remove($freelance);
            $entityManager->flush();
        }
        return $this->redirectToRoute('freelance_index', [], Response::HTTP_SEE_OTHER);
    }
}
