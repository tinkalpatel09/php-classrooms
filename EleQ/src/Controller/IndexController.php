<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig',  [
            'products' => [
                ['name' => 'Our Electronic Products', 'image' => 'image/preview.jpg', 'price' => 99.99 ],  ['name' => 'Samsung TV', 'image' => 'images/image1.jpg', 'price' => 999.99],
                ['name' => 'PlayStation', 'image' => 'images/image2.jpg', 'price' => 1999.99],
                ['name' => 'Screen', 'image' => 'images/image1.jpg', 'price' => 1299.99]
                
               
            ],[
            'controller_name' => 'IndexController',
        
           
        
         ]]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
        return $this->render('contact.html.twig');
    }

     /**
     * @Route("/contactUs", name="contactUs")
     */
    public function contactUs() {
        return $this->render('contactUs.html.twig');
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart() {
        return $this->render('cart.html.twig');
    }

     /**
     * @Route("/product", name="product")
     */
    public function product() {
        return $this->render('product.html.twig');
    }

     /**
     * @Route("/bill", name="bill")
     */
    public function bill() {
        return $this->render('bill.html.twig');
    }

    


}
