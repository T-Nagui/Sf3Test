<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LagarderGameController extends Controller
{
    /**
     * @Route("/lagarder/game", name="lagarder_game")
     */
    public function index()
    {
        $damier = array() ;
        for ($i=1;$i<=4;$i++){
            $damier[$i] = $this->makeDame(4,$i);
        }
        return $this->render('lagarder_game/index.html.twig', compact('damier'));
    }


    /**
     * @param $langeth
     * @return array
     */
    public function makeDame($langeth,$ligneNbr){
           $Ligne=[];
           for ($i=1;$i<=$langeth;$i++){
               $Ligne[$i]= $this->getColor($i,$ligneNbr);
           }
       return $Ligne;
    }
    public function getColor($caseNbr,$ligneNbr){
        // lineNbr détaermine si on commance par un carreuur colorer ou non
        if($ligneNbr% 2 != 0){
            if($caseNbr % 2 == 0){
                return 'blanc';
            }else{
                return 'noire';
            }
        }else{
            if($caseNbr % 2 != 0){
                return 'blanc';
            }else{
                return 'noire';
            }
        }

    }
}
