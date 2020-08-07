<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Areas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OfficesController extends AbstractController
{
    /**
     * @Route("/sucursales", name="sucursales")
     */
    public function sucursales()
    {

        $em = $this->getDoctrine()->getManager();

        $areas = $em->getRepository(Areas::class)->findAll(); 
  

        return $this->render('home/sucursales.html.twig', [
            'area' => $areas
        ]);

    }

    /**
     * @Route("/lista_sucursales", name="lista_sucursales")
     */
    public function lista_sucursales(Request $request)
    {

        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();
        $id = $params['id'];

        $areas = $em->getRepository(Areas::class)->find($id);

        if (empty($areas)) {
            $data =[
                'status' => 'error',
                'code' => '304',
                'menssage' => 'No se encuentra'
            ];
        }


            foreach ($areas->getOffices() as $key => $offices) {

                $list_off[$key]= [
                    'id' => $offices->getId(),
                    'name' => $offices->getName(),
                    'address' => $offices->getAddress(),
                    'phone' => $offices->getPhone(),
                    'map' => $offices->getMap()
                ];
    

            }

        
        $data =[
            'status' => 'success',
            'officess'   => $list_off 
        ];


        return new Response(
            json_encode(array( 'response' => $data )),
            200,
            array('Content-Type' => 'application/json')
        );

    }

}
