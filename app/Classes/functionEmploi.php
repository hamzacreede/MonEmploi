
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php 
  
    

//if $NombreModuleParSemaine == 2
	function a9lebzidane2($emploi,$veux , $NombreModuleParSemaine){


		  $k=0; $nbrveux=count($veux); $max=$nbrveux-1 ;  $m=0;

           for($i=0;$i<$nbrveux ; $i++) $emploi[$i]=array();

	                    for($i=0;$i<$nbrveux-1; $i++){ 

                                  $m=$i+1;

	                         for($j=0;$j<$max; $j++){

                                        $emploi[$k][0]= $veux[$i];

                                        $emploi[$k][1]= $veux[$m];

                                        $emploi[$k+1][0]= $veux[$m];
                                     
                                        $emploi[$k+1][1]= $veux[$i];
       
                                    $k+=2 ; $m++;
	                            	                                             	                                
	                           }

	                           $max-- ; 
	                          	    	        
		                 }

            return $emploi ;
	}



	$veux=array(0,3,4,5);

	$veux3=array(0,3,4,5,6,7,8);      

	$veux4=array(0,3,4,5,6,7);      

	$veux2=array(0,3,4); 

	$string=array('algo','analyse','bdd','management');
 
 $emploi=array();



	 
	    $nbremploi=count($string);  $nbremploi*=($nbremploi-1) ;


	$emploi=a9lebzidane2($emploi,$string, 2) ;

	
                   foreach( $emploi as  $val ) {

                      if( is_array( $val ) )  // si $val est un tableau 
                          
                         foreach( $val as $key=>$valeur  )    echo  $valeur .'  || ' ; ?><br> ____________________<br> <?php

                        }	

                           
                            

	                     
	                   

	                             
	                         

	                          // }

   ?>    	

		

	</body>
	</html>
      