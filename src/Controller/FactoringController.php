<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FactoringController extends AbstractController
{
    /**
     * @Route("/factoring", name="factoring")
     */
    public function index()
    {
        return $this->render('factoring/index.html.twig', [
            'controller_name' => 'FactoringController',
        ]);
    }
}
