<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Samedi ;

use App\Dimanche ;

use App\Lundi ;

use App\Mardi ;

use App\Mercredi ;

use App\Jeudi ;


use DB ;


use App\Classes\Schedule;

class AlgoController extends Controller
{
    //

    function FillEmploi(){

// envoyé tt les jours pour remplis tt les tables des jours avec tt les examples possible
    	 $jours=array('samedi','dimanche','lundi', 'mardi','mercredi','jeudi');

for($j=0;$j<1;$j++) {

         $veux=new Schedule($jours[$j]);  

         $veux->fillmatrice();  

         $emploi=$veux->getEmploi();  


	session(['nbr' => count($emploi)]);

        foreach ($emploi as $key ) { 
            
             if(is_array($key)){

             	 $i=1;  
               
             	if($jours[$j]=='samedi') $days=new Samedi();

             	if ($jours[$j]=='dimanche') $days=new Dimanche();

             	if($jours[$j]=='lundi') $days=new Lundi();

             	if($valeur=='mardi') $days=new Mardi();

             	if($valeur=='mercredi') $days=new Mercredi();

             	if($valeur=='jeudi') $days=new Jeudi();
      
                 foreach ($key as $cle ) { $days->$i = $cle  ;	$i++ ; }$days->$i='null' ;
                 //dirte null maa lakher psk suposite bli nbr taa les modules f journia mais f tableau kayen  ida manich ghalet donc  éme dirtha null 


                 $days->save();       

                 } 

         }

}

                      
    	return view('/home');


                        
	    

    }
}
