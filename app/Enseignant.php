<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //

    public $table="enseignants";

  

     public function Enseignant(){

    	return $this->belongsTo('App\Enseignant');
    }

     

    
}
