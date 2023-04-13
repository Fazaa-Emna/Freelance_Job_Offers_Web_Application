<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Blog;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CommentController extends AbstractController
{
    #[Route("/comment", name:"display_comment")]
    public function index(CommentRepository $repository): Response
    {
        $comments=$repository->findAll();

        
        return $this->render('comment/index.html.twig', [
            'b'=>$comments
        ]);
    }
    



    #[Route("/home", name:"display_admin")]
    public function indexAdmin(): Response
    {
        return $this->render('Home/index.html.twig', [
        ]);
    }

        #[Route("/addComment", name:"add_comment")]
    public function addComment(Request $request, ManagerRegistry $doctrine): Response
    {
        
        $comment = new Comment;
       //$comment->setBlog($blog);
        $form = $this ->createForm(CommentType::class,$comment);
        $form->handleRequest ($request);
        if($form ->isSubmitted()&& $form->isValid()){
            $em= $doctrine->getManager();
            $em->persist($comment);//Add
            $em->flush();
            return $this -> redirectToRoute(route:'display_comment');
        }
        return $this -> render('comment/ajoutComment.html.twig' , ['f'=>$form->createView()]);
    }



     

    
        #[Route("/removeComment/{id}", name:"supp_comment")]
    public function deleteComment(Comment $comment, ManagerRegistry $doctrine ): Response
    {
        $em= $doctrine->getManager();
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute(route:'display_comment');
        
    }


    #[Route("/modifComment/{id}", name:"modif_comment")]
    public function modifcomment(Request $request,$id,ManagerRegistry $doctrine,
    CommentRepository $repository, EntityManagerInterface $em): Response
    {//récupérer le comment à modifier
        $comment = $repository->find($id);
        $form = $this ->createForm(CommentType::class,$comment);
        $form->handleRequest($request);
        if($form ->isSubmitted() && $form->isValid()){
            $em= $doctrine->getManager();
            $em->flush();
            return $this -> redirectToRoute(route:'display_comment');}
        if(!$comment = $repository->find($id)){
            return $this -> redirectToRoute(route:'error');
        }
        return $this -> render('comment/modifComment.html.twig' , ['f' => $form->createView()]);
    }





   





    #[Route("/Error", name:"error")]
    public function erreur(): Response
    {
        return $this -> render('Error/erreur.html.twig',[] );
    }

}