<?php

namespace App\Classes;
use DB;


use App\Module ;

class Schedule
{ 

 public $cours=array() ,$td=array()  ,$emploi=array(),  $Samedi_cours=array() , $Samedi_td=array() , $EmploiParVeux=array() , $Table_TD_TP=array() ; 



  // il faut utiliser ce contructeur pour appeler une function qui remplis   les tableaux   

 public function __construct($jour){ //testing

            
        /*Hna habite nasta9bel ama jour ou najbed les nom module par raport jour hada

         aprés nstocké les cours+les td+tp f le jours hada mais le probléme les td et le tp

         rahoum yastockaw f les autres tables des jours lzm nréglais probléme hada */

            //samedi 

                $Samedi_cours  =DB::table('modules')
                ->select('Nom_Modules')
                ->where('Cours','1')
                ->where('Jours',$jour)
                ->get();
                
                $i=0;
                foreach ($Samedi_cours as $key) {
                	 
                	  $this->Samedi_cours[$i] = $key->Nom_Modules ; $i++;
                }

                session(['nbr_cour'=>$i]);

                $Samedi_td  =DB::table('modules')
                ->select('Nom_Modules')
                ->where('Jours',$jour)
                ->where('TD','1')
                ->orwhere('TP','1')                
                ->get();

                 $i=0;
                foreach ($Samedi_td as $key) {
                	 
                	  $this->Samedi_td[$i] = $key->Nom_Modules ; $i++;

                }



              

  }



// cette fonction elle permet de faire la permutation 

//if $NombreModuleParSemaine == 2
  function a9lebzidane($array , $nbr){

  	/* 
  	      example : veux = 0|1|2|3| ( c un array ) je veux crée et routourner l'array emploi avec tout les example 

  	      possible de cette suite (les valeurs de table veux) donc :

  	       emploi:k=   0|1|2|3|4|5|.....|...|   ( ici les nombre sans juste nombre de case je parle pas de la suite de table veux)
                       | | | | | |        |
                       v v v v v v        v
                       0|1|0|2|0|3|.... |...|
                       1|0|2|0|3|0|.....|...|
               
      
           m : c'est le $i+1   



     */
      
     
      
           $nbrveux=count($array);

      

 $k=0; ; $max=$nbrveux-1 ;  $m=0;     $emploi=array();

           for($i=0;$i<$nbrveux ; $i++)  $emploi[$i]=array();

                      for($i=0;$i<$nbrveux-1; $i++){ 

                                  $m=$i+1;

                           for($j=0;$j<$max; $j++){ 

                                        $emploi[$k][0]= $array[$i];

                                         $emploi[$k][1]= $array[$m];

                                         $emploi[$k+1][0]= $array[$m];
                                     
                                         $emploi[$k+1][1]= $array[$i];
       
                                    $k+=2 ; $m++;
                                                                                                              
                             }

                             $max-- ; 
                                            
                     }

                     return $emploi ; 

  }


// hna bch nchoufe a ce que les array cours et les td t3amro juste pour le test
   function getCours(){

    return $this->cours;

  }
    function getTD(){

    return $this->td;

  }


 // hna les deux tables cours et td rah ndirlhoum fusion f table emploi      

 function fillmatrice(){
        
   $i=0 ; 

    $this->cours=$this->a9lebzidane($this->Samedi_cours , session()->get('nbr_cour')) ;


           
        
    $this->td=$this->a9lebzidane($this->Samedi_td , session()->get('nbr_td')) ; 



    foreach($this->cours as $key_cours){

          $j=0; 



       foreach($this->td as $key_td){

           if(is_array($key_cours)){

                 foreach ($key_cours as $cle_cours ) { $this->emploi[$i][$j]=$cle_cours ;   $j++;} 

             }

            if(is_array($key_td)){

                  foreach ($key_td as $cle_td ) { $this->emploi[$i][$j]=$cle_td ;   $j++;} 

             }



          $i++;

        }

        }



 }

   function getEmploi(){

    return $this->emploi;

  }
  

     

    
}
