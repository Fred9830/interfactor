<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Guarantee;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GuaranteeController extends AbstractController
{
     /**
     * @Route("/garantias", name="garantias")
     */
    public function garantias()
    {
        return $this->render('home/garantias.html.twig');
    }

      /**
     * @Route("/save_guarantee", methods={"POST"})
     */
    public function save_guarantee (Request $request)
    {

    
        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();

        $guarantee = new Guarantee();
        $guarantee->setName($params['nombreempresa']);
        $guarantee->setRut($params['rutempresa']);
        $guarantee->setPhone($params['telefono']);
        $guarantee->setEmail($params['email']);
        $guarantee->setMessage($params['mensaje']);
        $guarantee->setCreatedAt(new \DateTime("now"));

        $em->persist($guarantee);
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
