<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController {

    /**
     * @Route("/", name="index")
     */
    public function index() {
        // return $this->json([
        //     'bonjour' => 'hello',
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/IndexController.php',
        // ]);
        return $this->render('accounts/index.html.twig');
    }

    /**
     * @Route("/accounts/{name}", name="accounts")
     */
    public function accounts(Request $request) {
        // dump($request->get('name'));
        // return new Response('<h1>Welcome ' . $request->get('name') . '!</h1>');
        return $this->render('accounts/account.html.twig', [
            'name' => $request->get('name')
        ]);
    }
}
