<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistraterController extends AbstractController
{
    /**
     * @Route("/registrater", name="registrater")
     */
    public function index()
    {
        return $this->render('registrater/index.html.twig', [
            'controller_name' => 'RegistraterController',
        ]);
    }
}

