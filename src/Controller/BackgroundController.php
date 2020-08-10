<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\YearState;
use App\Entity\YearMemory;
use App\Entity\YearOther;
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

        $yearstate = $em->getRepository(YearState::class)->findAll(); 
        $yearmemo = $em->getRepository(YearMemory::class)->findAll(); 
        $yearother = $em->getRepository(YearOther::class)->findAll(); 

        foreach ($yearstate as $ls => $year) {
            $years[$ls] = [
                'name' => $year->getName()
            ];
        }

        foreach ($yearmemo as $ls => $year) {
            $yearm[$ls] = [
                'name' => $year->getName()
            ];
        }
     
        foreach ($yearother as $ls => $year) {
            $yearo[$ls] = [
                'name' => $year->getName()
            ];
        }
  


        foreach ($yearstate as $key => $val) {
  
                foreach ($val->getStatements() as $pd => $state) {
                   
                    $finan[$val->getName()][$pd]= [
                        'archive' => $state->getArchive()
                    ];
                }
        }

        foreach ($yearmemo as $uh => $old) {
  
            foreach ($old->getMemories() as $lm => $memory) {
               
                $memoyear[$old->getName()][$lm]= [
                    'archive' => $memory->getArchive()
                ];
            }
        }

        foreach ($yearother as $po => $ler) {
  
            foreach ($ler->getOthers() as $gg => $others) {
               
                $othyear[$ler->getName()][$gg]= [
                    'archive' => $others->getArchive()
                ];
            }
        }
     
        return $this->render('home/antecedentes.html.twig', [
            'yearstate' => $years,
            'yearmemo' => $yearm,
            'yearother' => $yearo,
            'finan' => $finan,
            'memory' => $memoyear,
            'other' => $othyear

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

        $yearsoth = $em->getRepository(YearOther::class)->find($id);
        $yearstate = $em->getRepository(YearState::class)->find($id);
        $yearmemo = $em->getRepository(YearMemo::class)->find($id);

        if (empty($others)) {
            $data =[
                'status' => 'error',
                'code' => '304',
                'menssage' => 'No se encuentra'
            ];
        }


            foreach ($yearsoth->getOthers() as $key => $oth) {

                $list_oth[$key]= [
                    'id' => $oth->getId(),
                    'name' => $oth->getName(),
                    'archive' => $oth->getPhone()
                ];
    

            }

            foreach ($yearstate->getStatements() as $key => $state) {

                $list_state[$key]= [
                    'id' => $state->getId(),
                    'name' => $state->getName(),
                    'archive' => $state->getPhone()
                ];
    
            }

            
            foreach ($yearmemo->getMemories() as $key => $memory) {

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

    /**
     * @Route("/vector_api", name="vector")
     */
    public function vector(Request $request)
    {
     
        $em = $this->getDoctrine()->getManager();

        $other = $em->getRepository(Others::class)->findAll(); 
        $state = $em->getRepository(Statements::class)->findAll(); 
        $memory = $em->getRepository(Memories::class)->findAll(); 
      
        foreach ($other as $key => $val) {
  
            $otherarr[$key]= $val->getYear()->getName(); 
        }

        
        foreach ($state as $kye => $value) {
  
            $statearr[$kye]= $value->getYear()->getName(); 
        }

        
        foreach ($memory as $kyo => $vlu) {
  
            $memoarr[$kyo]= $vlu->getYear()->getName(); 
        }


        $poderoso = array_merge($otherarr, $statearr, $memoarr); 

        $data =[
            'status' => 'success',
            'todoarr'   => $poderoso
        ];


        return new Response(
            json_encode(array( 'response' => $data )),
            200,
            array('Content-Type' => 'application/json')
        );
      
    }
    
}
