<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ;

use App\Enseignant ;

class TestController extends Controller
{
    //

   function GetEmploi(){

   	    $resultat = DB::table('modules')

   	         ->select('Nom_Modules','Jours','Heure')
   	         ->where('ID_Module',13)
   	         ->get();

   	   
    $resultat2 = DB::table('enseignants')
             ->join('modules', 'enseignants.ID_Module', '=', 'modules.ID_Module')
             ->select('Nom_Enseignant','Email_Enseignant')
             ->get();


    	$arr=Array('resultat2'=>$resultat2 , 'resultat'=>$resultat  );


        return view('test',$arr);


   }


   function PostEmploi(Request $request){

       
            $id = DB::table('enseignants')->insertGetId(array(
                             
                    'Nom_Enseignant' => $request->input('Nom_Enseignant'),

                                  
                ));

            if($request->input('cours1'))  $cours1=true; else $cours1 =false ; 
            if($request->input('td1'))     $td1=true; else $td1 =false ; 
            if($request->input('tp1'))     $tp1=true; else $tp1 =false ;   



            if($request->input('cours2'))  $cours2=true; else $cours2 =false ; 
            if($request->input('td2'))     $td2=true; else $td2 =false ; 
            if($request->input('tp2'))     $tp2=true; else $tp2 =false ; 


            if($request->input('cours3'))  $cours3=true; else $cours3 =false ; 
            if($request->input('td3'))     $td3=true; else $td3 =false ; 
            if($request->input('tp3'))     $tp3=true; else $tp3 =false ; 

        DB::table('modules')->insert([
                             
                    'Nom_Modules' => $request->input('module1'),

                     'Cours' => $cours1 ,

                     'TD' => $td1 ,

                      'TP' => $tp1 ,

                    'Heure' => $request->input('heure1'),

                    'Jours' => $request->input('jour'),

                    'ID_Enseignant' => $id,
                   
                ]);


              DB::table('modules')->insert([
                             
                    'Nom_Modules' => $request->input('module2'),

                     'Cours' => $cours2,

                     'TD' => $td2,

                     'TP' => $tp2,

                    'Heure' => $request->input('heure2'),

                    'Jours' => $request->input('jour'),

                    'ID_Enseignant' => $id,
                   
                ]);


            DB::table('modules')->insert([
                             
                    'Nom_Modules' => $request->input('module3'),

                      'Cours' => $cours3,

                      'TD' =>  $td3,

                      'TP' => $tp3 ,

                    'Heure' => $request->input('heure3'),

                    'Jours' => $request->input('jour'),


                    'ID_Enseignant' => $id,
                   
                ]);

    
               return view('acculier');
   	
   }









}
