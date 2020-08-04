<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LeasingController extends AbstractController
{
      /**
     * @Route("/leasing", name="leasing")
     */
    public function leasing()
    {
        return $this->render('home/leasing.html.twig');
    }
}
