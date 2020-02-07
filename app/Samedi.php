<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samedi extends Model
{
    //

    public $table="samedi";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
