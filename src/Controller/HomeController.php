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
       /**
     * @Route("/leasing", name="leasing")
     */
    public function leasing()
    {
        return $this->render('home/leasing.html.twig');
    }
       /**
     * @Route("/creditos", name="creditos")
     */
    public function creditos()
    {
        return $this->render('home/creditos.html.twig');
    }
        /**
     * @Route("/garantias", name="garantias")
     */
    public function garantias()
    {
        return $this->render('home/garantias.html.twig');
    }
            /**
     * @Route("/empresa", name="empresa")
     */
    public function empresa()
    {
        return $this->render('home/empresa.html.twig');
    }

}
