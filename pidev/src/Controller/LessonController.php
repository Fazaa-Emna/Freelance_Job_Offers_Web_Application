<?php

namespace App\Controller;

use App\Entity\Lesson;
use App\Form\LessonType;
use App\Repository\LessonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/lesson')]
class LessonController extends AbstractController
{
   

    #[Route('/new', name: 'app_lesson_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LessonRepository $lessonRepository): Response
    {
        $lesson = new Lesson();
        $form = $this->createForm(LessonType::class, $lesson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lessonRepository->save($lesson, true);

            return $this->redirectToRoute('app_lesson_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lesson/new.html.twig', [
            'lesson' => $lesson,
            'form' => $form,
        ]);
    }
    #[Route('/course/{cid}/lesson', name: 'app_lesson_course_front', methods: ['GET', 'POST'])]
    public function showLessonsByCourseFront($cid)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $lessons = $entityManager->createQueryBuilder()
            ->select('l', 'c')
            ->from('App\Entity\Lesson', 'l')
            ->join('l.cid', 'c')
            ->where('c.cid = :cid')
            ->setParameter('cid', $cid)
            ->getQuery()
            ->getResult();
        
        return $this->render('lesson/index.html.twig', [
            'lessons' => $lessons,
        ]);
    }
    #[Route('/course/{cid}/lessons', name: 'app_lesson_course', methods: ['GET', 'POST'])]
    public function showLessonsByCourse($cid)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $lessons = $entityManager->createQueryBuilder()
            ->select('l', 'c')
            ->from('App\Entity\Lesson', 'l')
            ->join('l.cid', 'c')
            ->where('c.cid = :cid')
            ->setParameter('cid', $cid)
            ->getQuery()
            ->getResult();
        
        return $this->render('lesson/lessonByCourse.html.twig', [
            'lessons' => $lessons,
        ]);
    }
    #[Route('/{lid}', name: 'app_lesson_show', methods: ['GET'])]
    public function show(Lesson $lesson): Response
    {
        return $this->render('lesson/show.html.twig', [
            'lesson' => $lesson,
        ]);
    }

    #[Route('/{lid}/edit', name: 'app_lesson_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lesson $lesson, LessonRepository $lessonRepository): Response
    {
        $form = $this->createForm(LessonType::class, $lesson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lessonRepository->save($lesson, true);

            return $this->redirectToRoute('app_lesson_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lesson/edit.html.twig', [
            'lesson' => $lesson,
            'form' => $form,
        ]);
    }

    #[Route('/{lid}', name: 'app_lesson_delete', methods: ['POST'])]
    public function delete(Request $request, Lesson $lesson, LessonRepository $lessonRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lesson->getLid(), $request->request->get('_token'))) {
            $lessonRepository->remove($lesson, true);
        }

        return $this->redirectToRoute('app_lesson_index', [], Response::HTTP_SEE_OTHER);
    }
}
