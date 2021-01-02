<?php

namespace App\Controller;

use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommentRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function listComment(CommentRepository $commentRepository)
    {
        $comments = $commentRepository->findAll();



        return $this->render('comment/index.html.twig', [
            'comment' => $comments,
        ]);
    }

    /**
     * @Route("/comment/create", name="comment_create")
     */

    public function createComment(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('Submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();

            $comment = new Comment();
            $comment->settitle($data['title']);
            $comment->setcontent($data['content']);


            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('comment'));
        }

        return $this->render('comment/createComm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
