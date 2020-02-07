<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ;

class EnseignantController extends Controller
{
    //

    function getshow(){

//             ->join('modules', 'enseignants.ID_Module', '=', 'modules.ID_Module')
         
     $resultat = DB::table('enseignants')
              ->select('Nom_Enseignant','Email_Enseignant')
             ->get();


    	$arr=Array('resultat'=>$resultat);


        return view('enseignant.show',$arr);
    }



    function getadd(){

        return view('enseignant.add');
    }
    


    function AddEnseignant(Request $request){


       for($i=0;$i<5;$i++){

    	$resultat=DB::table('enseignants')->insert([
           
              'Nom_Enseignant' => $request->input('name'.$i),

              'Email_Enseignant' => $request->input('mail'.$i),

    	]);


          }

    	return redirect('add');

         
    }




}
