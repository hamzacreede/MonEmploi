<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Schedule;


use App\Classes\Matrix;

use DB ;

class EmploiController extends Controller
{
    //
  
    public function GetEmploi(Request $request){
         
        
    	return view('/welcome');
    }

    public function PostEmploi(Request $request){

    

             $informations=array(

             	'Module_A '=>array(

             		          'Module' => $request->input('Module1') ,
             		          'Cours' => $request->input('Cours1') ,
             		          'TD' => $request->input('TD1') ,
             		          'TP' => $request->input('TP1') ,
             		      

             	   ) ,

                'Module_B '=>array(

                	          'Module' => $request->input('Module2') ,
             		          'Cours' => $request->input('Cours2') ,
             		          'TD' => $request->input('TD2') ,
             		          'TP' => $request->input('TP2') ,


                   ) ,

                 'Module_C '=>array(


                              'Module' => $request->input('Module3') ,
             		          'Cours' => $request->input('Cours3') ,
             		          'TD' => $request->input('TD3') ,
             		          'TP' => $request->input('TP3') ,

                   ) ,

                 'Module_D '=>array(

                 	          'Module' => $request->input('Module4') ,
             		          'Cours' => $request->input('Cours4') ,
             		          'TD' => $request->input('TD4') ,
             		          'TP' => $request->input('TP4') ,

                 	 ) , 

                 'Module_E '=>array(

                 	          'Module' => $request->input('Module5') ,
             		          'Cours' => $request->input('Cours5') ,
             		          'TD' => $request->input('TD5') ,
             		          'TP' => $request->input('TP5') ,

                 	 )

             );


          
              
             $matrice = new Matrix($informations);
 
             $matrice->FillMatrix();


    	return view('/home',$informations);
    

}
}
