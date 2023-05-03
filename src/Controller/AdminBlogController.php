<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\Blog1Type;
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/blog')]
class AdminBlogController extends AbstractController
{
    #[Route('/', name: 'app_admin_blog_index', methods: ['GET'])]
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('admin_blog/index.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_blog_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BlogRepository $blogRepository): Response
    {
        $blog = new Blog();
        $form = $this->createForm(Blog1Type::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blogRepository->save($blog, true);

            return $this->redirectToRoute('app_admin_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_blog_show', methods: ['GET'])]
    public function show(Blog $blog): Response
    {
        $comments=$blog->getComments();
        return $this->render('admin_blog/show.html.twig', [
            'blog' => $blog,
            'comments'=>$comments,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_blog_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Blog $blog, BlogRepository $blogRepository): Response
    {
        $form = $this->createForm(Blog1Type::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blogRepository->save($blog, true);

            return $this->redirectToRoute('app_admin_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_blog/edit.html.twig', [
            'blog' => $blog,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_blog_delete', methods: ['POST'])]
    public function delete(Request $request, Blog $blog, BlogRepository $blogRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blog->getId(), $request->request->get('_token'))) {
            $blogRepository->remove($blog, true);
        }

        return $this->redirectToRoute('app_admin_blog_index', [], Response::HTTP_SEE_OTHER);
    }
}
