<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mardi extends Model
{
    //

    public $table="mardi";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
