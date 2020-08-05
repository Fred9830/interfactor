<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Leasing;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LeasingController extends AbstractController
{
      /**
     * @Route("/leasing", name="leasing")
     */
    public function leasing()
    {
        return $this->render('home/leasing.html.twig');
    }


     /**
     * @Route("/save_leasing", methods={"POST"})
     */
    public function save_leasing (Request $request)
    {

    
        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();

        $leasing = new Leasing();
        $leasing->setName($params['nombreempresa']);
        $leasing->setRut($params['rutempresa']);
        $leasing->setPhone($params['telefono']);
        $leasing->setEmail($params['email']);
        $leasing->setMessage($params['mensaje']);
        $leasing->setCreatedAt(new \DateTime("now"));

        $em->persist($leasing);
        $em->flush();

        $data =[
            'status' => 'success',
            'code'   => 200,
            'message' => 'Procesado exitosamente'
        ];

        return new Response(
            json_encode(array( 'response' => $data )),
            200,
            array('Content-Type' => 'application/json')
        );
    }

}
