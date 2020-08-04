<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LeasingController extends AbstractController
{
    /**
     * @Route("/leasing", name="leasing")
     */
    public function index()
    {
        return $this->render('leasing/index.html.twig', [
            'controller_name' => 'LeasingController',
        ]);
    }
}
