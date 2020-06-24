<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

   /**
     * @Route("/factoring", name="factoring")
     */
    public function factoring()
    {
        return $this->render('home/factoring.html.twig');
    }

}
