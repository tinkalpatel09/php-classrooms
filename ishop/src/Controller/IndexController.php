<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'products' => [
                ['name' => 'iPhone 11', 'image' => 'images/iphone_11.jpeg', 'price' => 999.99],
                ['name' => 'iMac', 'image' => 'images/imac.jpeg', 'price' => 1999.99],
                ['name' => 'iPad Pro', 'image' => 'images/ipad_pro.jpeg', 'price' => 1299.99]
            ]
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
        return $this->render('contact.html.twig');
    }
}
