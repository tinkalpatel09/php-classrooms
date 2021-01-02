<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users", methods={"GET"})
     */
    public function get_users(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/user/{id}", name="user")
     */
    public function get_user($id, UserRepository $userRepository) {
        $user = $userRepository->find($id);

        if($user == null) {
            return new Response("<h1>User not found!</h1>");
        } else {
            return $this->render('user/user.html.twig', [
                'user' => $user
            ]);
        }
    }

    /**
     * @Route("/users/create", name="user_create", methods={"GET", "POST"})
     */
    public function create_user(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $file = $request->files->get('user')['attachment'];
                if($file) {
                    $filename = md5(uniqid()) . '.' . $file->guessClientExtension();

                    $file->move(
                        $this->getParameter('uploads_dir'),
                        $filename
                    );

                    $user->setImage($filename);

                    $em->persist($user);
                    $em->flush();
 $this->addFlash('success', 'User created successfully!');
                } else {
                    $this->addFlash('failure', 'Ooops no profile picture was attached!');
                }
                   

                return $this->redirect($this->generateUrl('users'));
            } else {
                $form->getErrors();
            }
        }

        // $user->setUsername($request->get('username'));
        // $user->setPassword($request->get('password'));

        return $this->render('user/create.html.twig', [
            'userForm' => $form->createView()
        ]);
        
        // return new Response('User was created!');
    }

    /**
     * @Route("/users/remove/{id}", name="user_remove")
     */
    public function remove_user($id, UserRepository $userRepository) {
        $user = $userRepository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'User removed successfully!');

        return $this->redirect($this->generateUrl('users'));
    }
}
