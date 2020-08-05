<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Credits;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreditsController extends AbstractController
{
     /**
     * @Route("/creditos", name="creditos")
     */
    public function creditos()
    {
        return $this->render('home/creditos.html.twig');
    }

     /**
     * @Route("/save_credits", methods={"POST"})
     */
    public function save_credits (Request $request)
    {

    
        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();

        $credits = new Credits();
        $credits->setName($params['nombreempresa']);
        $credits->setRut($params['rutempresa']);
        $credits->setPhone($params['telefono']);
        $credits->setEmail($params['email']);
        $credits->setMessage($params['mensaje']);
        $credits->setCreatedAt(new \DateTime("now"));

        $em->persist($credits);
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
