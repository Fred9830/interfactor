<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditsController extends AbstractController
{
     /**
     * @Route("/creditos", name="creditos")
     */
    public function creditos()
    {
        return $this->render('home/creditos.html.twig');
    }
}
