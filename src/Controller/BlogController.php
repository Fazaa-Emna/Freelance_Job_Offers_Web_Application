<?php

namespace App\Controller;
use App\Entity\Blog;
use App\Form\BlogType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BlogRepository;
use Doctrine\Persistence\ManagerRegistry;
use Snipe\BanBuilder\CensorWords;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;

/////



#[Route('/blog')]
class BlogController extends AbstractController
{
    #[Route("/", name:"display_blog")]
public function index(Request $request, BlogRepository $repository,ManagerRegistry $doctrine): Response
{
    $repoC = $doctrine->getRepository(Blog::class);
 
    $currentSort = $request->query->get('sort', 'ASC');
    
    if ($currentSort == 'ASC') {
        $blogs = $repoC->findBy([], ['title' => 'ASC']);
        $nextSort = 'DESC';
    } else {
        $blogs = $repoC->findBy([], ['title' => 'DESC']);
        $nextSort = 'ASC';
    }
    
    return $this->render('blog/index.html.twig', [
        'b' => $blogs,
        'nextSort' => $nextSort,
    ]);
}




    #[Route('/add', name: 'addBlog')]
    public function addBlog(ManagerRegistry $doctrine, Request $request): Response
    {
        $censor = new CensorWords;
        $blog= new Blog;
        $form=$this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
$notifier = NotifierFactory::create();

// Create your notification
 $notification =
             (new Notification())
             ->setTitle('Notification')
             ->setBody('Your Blog is added successfully <3')
             
            
;
$notifier->send($notification);
            $censor = new CensorWords();

            $title = $blog->getTitle();
            $body = $blog->getBody();
    
            $censoredTitle = $censor->censorString($title)['clean'];
            $censoredBody = $censor->censorString($body)['clean'];
    
            $blog->setTitle($censoredTitle);
            $blog->setBody($censoredBody);

            
            $em= $doctrine->getManager();
            $em->persist($blog);
            $em->flush();
            
        return $this->redirectToRoute('display_blog');
        }

        return $this->render('blog/addBlog.html.twig', [
            'f'=> $form->createView(),
        ]);
    }





      


        #[Route("/removeBlog/{id}", name:"supp_blog")]
    public function suppClassroom($id,BlogRepository $r, ManagerRegistry $doctrine): Response
    {
        //récupérer la blog à supprimer
        $blog=$r->find($id);
        //Action suppression
        $em =$doctrine->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('display_blog',);
    }


            #[Route("/modifBlog/{id}", name:"modif_blog")]
    public function modifBlog(Request $request,ManagerRegistry $doctrine, Blog $blog): Response
    {
        //récupérer le blog à modifier
        $form = $this->createForm(BlogType::class, $blog);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('showBlog', ['id' => $blog->getId()]);
        }
            
        return $this -> render('blog/addBlog.html.twig' , ['f'=>$form->createView()]);

    }
    
    #[Route('afficherBlog/{id}', name: 'showBlog')]
    public function showBlog($id, ManagerRegistry $doctrine): Response
    {
        //Trouver le bon Classroom
        $repoC = $doctrine->getRepository(Blog::class);
        $blog= $repoC->find($id);
        $comments=$blog->getComments();     

        return $this->render('blog/showB.html.twig', [
            'blog' => $blog,
            'comments'=>$comments,
        ]);
    }

    #[Route('/star/{id}', name: 'star')]
    public function yourAction(Request $request, $id, ManagerRegistry $doctrine)
{
    if ($request->isXmlHttpRequest()) {
        // handle the AJAX request
        $data = $request->getContent(); // retrieve the data sent by the client-side JavaScript code
        $repository = $doctrine->getRepository(Blog::class);
        $blogs = $repository->find($id);
        
        if ($blogs->getNote() == 0) {
            $blogs->setNote($data[6]);
        } else {
            $newNote = ($blogs->getNote() + $data[6]) / 2;
            if ($newNote < $blogs->getNote()) {
                $newNote = $blogs->getNote();
            }
            $blogs->setNote($newNote);
        }
        
        $em=$doctrine->getManager();
        $em->persist($blogs);
        $em->flush();
        $bl = $repository->find($id);
        $test=$bl->getNote();
        $response = new Response();//nouvelle instance du response pour la renvoyer a la fonction ajax
        $response->setContent(json_encode($test));//encoder les donnes sous forme JSON et les attribuer a la variable response
        $response->headers->set('Content-Type', 'application/json');
        return $response;//envoie du response
    } 
}
    
    
}
