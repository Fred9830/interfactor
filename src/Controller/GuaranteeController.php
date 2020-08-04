<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GuaranteeController extends AbstractController
{
    /**
     * @Route("/guarantee", name="guarantee")
     */
    public function index()
    {
        return $this->render('guarantee/index.html.twig', [
            'controller_name' => 'GuaranteeController',
        ]);
    }
}
