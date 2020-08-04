<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GuaranteeController extends AbstractController
{
     /**
     * @Route("/garantias", name="garantias")
     */
    public function garantias()
    {
        return $this->render('home/garantias.html.twig');
    }
}
