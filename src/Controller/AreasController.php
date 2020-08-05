<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AreasController extends AbstractController
{
    /**
     * @Route("/areas", name="areas")
     */
    public function index()
    {
        return $this->render('areas/index.html.twig', [
            'controller_name' => 'AreasController',
        ]);
    }
}
