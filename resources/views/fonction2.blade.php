<!DOCTYPE html>
<html>
<head>
	

</head>
<body>
	
   <?php
  class Emploi{

            private  $EmploiParVeux=array() ,  $Table_TD_TP=array();

 public function __construct(){ //testing

            $this->EmploiParVeux=array( // c un resultat d'une methode qui charché de trouver les module avec le temps possible / jours ..
               
               '0'=>array('BDD','?','Management','?'),

               '1'=>array('Management','?','?','BDD'),

               '2'=>array('ACOO','POO','?','?'),
              
            );

                 $this->Table_TD_TP=array( // 

               '0'=>array('TD1','TD2'),

               '1'=>array('TD1','TP1'),

               '2'=>array('TD2','TP2'),
              
            );

  }


 public  function getEmplouParVeurx(){

  	return $this->EmploiParVeux;

  }


  public function FillEmploi(){

  	//$this->$EmploiParVeux[$k][$j]=$this->testing();

         $NombreProba=3; $offset_TD_TP=3; $y=0 ;
                      
            // if($this->$Table_TD_TP != null) { // vérifier qu'il ya des td et des tp

                 for($l=0 ; $l<$offset_TD_TP ;$l++){ // parcourir le  tableau des td et tp
            
	                 for($k=0 ; $k<$NombreProba ; $k++){// remplir le tableau Numero x qui present une journé 
	            
                          for($j=0 ; $j<4 ; $j++){ //&& $this->$Table_TD_TP[$l][$y] != null)
                 
                 	          if($this->EmploiParVeux[$k][$j]=='?' ){

                 	    	       $this->EmploiParVeux[$k][$j]=$this->Table_TD_TP[$l][$y];

                 	                $y++;
                 	            } $y=0;


                           }  

                       } 

                  } return $this->EmploiParVeux;
                   
              }
                     

       }//FIN du function  




          
   

  $test=new Emploi();   $array=array();   $test->FillEmploi();

     
$array=$test->getEmplouParVeurx();



                 foreach( $array as  $val ) {
 
                      if( is_array( $val ) )  // si $val est un tableau 
                          
                         foreach( $val as $key=>$valeur  )    
                         	echo  $valeur .' ' .'  ' ; ?><br> <br> <?php

                        }	






      ?>



</body>
</html>