<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Factoring;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FactoringController extends AbstractController
{
    /**
     * @Route("/factoring", name="factoring")
     */
    public function factoring()
    {
        return $this->render('home/factoring.html.twig');
    }

    /**
     * @Route("/save_factoring", methods={"POST"})
     */
    public function save_factoring (Request $request)
    {

        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();
        $file = $request->files->get('images');

        $factoring = new Factoring();
        $factoring->setName($params['nombreempresa']);
        $factoring->setRut($params['rutempresa']);
        $factoring->setBilling($params['facturacion']);
        $factoring->setAmount($params['monto']);
        $factoring->setPhone($params['telefono']);
        $factoring->setEmail($params['email']);
        $factoring->setExpiration(new \DateTime(date("Y-m-d", strtotime($params['fecha']))));
        $factoring->setCreatedAt(new \DateTime("now")); 

        if($file != null ){
            $filename = md5(uniqid()).".".$file->getClientOriginalExtension();
            $file->move(
                $this->getParameter('factoring'),
                $filename);
        }else{
            $filename = "default.png";
        }

        $factoring->setImage($filename);
        $em->persist($factoring);
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
