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
     * @Route("/empresa", name="empresa")
     */
    public function empresa()
    {
        return $this->render('home/empresa.html.twig');
    }
  
                /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('home/blog.html.twig');
    }
              /**
     * @Route("/single_blog", name="single_blog")
     */
    public function single_blog()
    {
        return $this->render('home/single_blog.html.twig');
    }
                  /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('home/faq.html.twig');
    }

                      /**
     * @Route("/ejecutivos", name="ejecutivos")
     */
    public function ejecutivos()
    {
        return $this->render('home/ejecutivos.html.twig');
    }

 

}
