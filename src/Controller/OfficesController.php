<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    /**
     * @Route("/sucursales", name="sucursales")
     */
    public function sucursales()
    {
        return $this->render('home/sucursales.html.twig');
    }

}
