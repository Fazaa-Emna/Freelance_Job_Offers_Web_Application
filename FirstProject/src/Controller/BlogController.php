<?php

namespace App\Controller;
use App\Entity\Blog;
use App\Form\BlogType;
use App\Form\SearchType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BlogRepository;
use Doctrine\Persistence\ManagerRegistry;
use Snipe\BanBuilder\CensorWords;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Contracts\Translation\TranslatorInterface;



#[Route('/blog')]
class BlogController extends AbstractController
{
    #[Route("/", name:"display_blog")]
    public function index(BlogRepository $repository): Response
    {
        $blogs=$repository->findAll();
        return $this->render('blog/index.html.twig', [
            'b'=>$blogs
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
 


    
    
}
