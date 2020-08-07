<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Years;
use App\Entity\Others;
use App\Entity\Statements;
use App\Entity\Memories;

class BackgroundController extends AbstractController
{
    /**
     * @Route("/antecedentes", name="antecedentes")
     */
    public function antecedentes()
    {
        $em = $this->getDoctrine()->getManager();

        $years = $em->getRepository(Years::class)->findAll(); 

      foreach ($years as $ls => $year) {
          $yearm[$ls] = [
              'name' => $year->getName()
          ];
      }


        foreach ($years as $key => $val) {
  
                foreach ($val->getStatements() as $pd => $state) {
                   
                    $finan[$val->getName()][$pd]= [
                        'archive' => $state->getArchive()
                    ];
                }
        }
      


        
        return $this->render('home/antecedentes.html.twig', [
            'year' => $yearm,
            'finan' => $finan
        ]);
    }

     /**
     * @Route("/lista_others", name="lista_others")
     */
    public function lista_others(Request $request)
    {

        $params =$request->request->all();
        $em = $this->getDoctrine()->getManager();
        $id = $params['id'];

        $years = $em->getRepository(Years::class)->find($id);

        if (empty($others)) {
            $data =[
                'status' => 'error',
                'code' => '304',
                'menssage' => 'No se encuentra'
            ];
        }


            foreach ($years->getOthers() as $key => $oth) {

                $list_oth[$key]= [
                    'id' => $oth->getId(),
                    'name' => $oth->getName(),
                    'archive' => $oth->getPhone()
                ];
    

            }

            foreach ($years->getStatements() as $key => $state) {

                $list_state[$key]= [
                    'id' => $state->getId(),
                    'name' => $state->getName(),
                    'archive' => $state->getPhone()
                ];
    
            }

            
            foreach ($years->getMemories() as $key => $memory) {

                $list_memory[$key]= [
                    'id' => $memory->getId(),
                    'name' => $memory->getName(),
                    'archive' => $memory->getPhone()
                ];
    

            }
        
        $data =[
            'status' => 'success',
            'officess'   => $list_oth
        ];


        return new Response(
            json_encode(array( 'response' => $data )),
            200,
            array('Content-Type' => 'application/json')
        );

    }

     
    
}
