<?php

namespace App\Classes;

use DB; 

use Illuminate\Http\Request;


class Matrix
{
    
    //Attributs
    public $informations=array() ,$matrice1=array(),  $matrice2=array(),  $matrice3=array(),  $matrice4=array(),  $matrice5=array() ;



     //copier un vecteur / une matrice      
    function arrayCopy( array $array ) 

      {
         
         $result = array();

        foreach( $array as $key => $val ) {

            if( is_array( $val ) ) { // si $val est un tableau 

                $result[$key] = $this->arrayCopy( $val );

            } 

            elseif ( is_object( $val ) ) {

                $result[$key] = clone $val;

            } 

            else {

                $result[$key] = $val;
            }
        }

        return $result;

       }
                 
 //constructeur      
 public function __construct($informations)
   {

           for ($i=0; $i < 5 ; $i++)  $this->informations[$i]=array();
 
     
           $this->informations=  $this->arrayCopy ( $informations  ) ;
            

             $_SESSION['informations'] =  $this->informations;

   } 

  
 // diviser la matrice a plusieurs vecteurs 
 public function FillMatrix()
   {

      

        $this->matrice1=array_column($this->informations, 'Module');

        $this->matrice2=array_column($this->informations, 'Cours');

        $this->matrice3=array_column($this->informations, 'TD');

        $this->matrice4=array_column($this->informations, 'TP');

                

      
    
    }
    

 

// function to set informtion in bdd 

    /*
     for($i=0;$i<5;$i++){

                   if( $this->matrice2[$i]) $cours=true  ; else  $cours=false ;

                   if( $this->matrice3[$i]) $td=true  ; else  $td=false ;

                   if( $this->matrice4[$i]) $tp=true  ; else  $tp=false ;

                DB::table('modules')->insert([

                 [ 

                   'NomModule' =>   $this->matrice1[$i],  
                   'cours'     =>  $cours,
                   'td'        =>  $td,
                   'tp'        =>  $tp,
                 ] 

                ]);

      }  */
     

    
}
