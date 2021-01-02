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
                ['id' => '1','name' => 'Case', 'image' => '../images/p1.jpg', 'price' => 309.00 ,'price-sale' => 279.00 ,'dis' => 'dis dis', ],
                ['id' => '2','name' => 'Case', 'image' => '../images/p1.jpg', 'price' => 309.00 ,'price-sale' => 279.00 ,'dis' => 'dis dis', ],
                ['id' => '3','name' => 'Case', 'image' => '../images/p1.jpg', 'price' => 309.00 ,'price-sale' => 279.00 ,'dis' => 'dis dis', ],
                ['id' => '4','name' => 'Case', 'image' => '../images/p1.jpg', 'price' => 309.00 ,'price-sale' => 279.00 ,'dis' => 'dis dis', ],
                ['id' => '5','name' => 'Case', 'image' => '../images/p1.jpg', 'price' => 309.00 ,'price-sale' => 279.00 ,'dis' => 'dis dis', ],

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
