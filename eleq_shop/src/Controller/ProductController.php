<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(Request $request)
    {

    
        $myid = $request->get('id');

        return $this->render('product/index.html.twig', [
            'QS' => $myid,
            'controller_name' => 'ProductController',
        ]);
    }



}
