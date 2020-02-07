<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lundi extends Model
{
    //

    public $table="lundi";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
