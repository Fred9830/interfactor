<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditsController extends AbstractController
{
    /**
     * @Route("/credits", name="credits")
     */
    public function index()
    {
        return $this->render('credits/index.html.twig', [
            'controller_name' => 'CreditsController',
        ]);
    }
}
