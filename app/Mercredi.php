<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercredi extends Model
{
    //

    public $table="mercredi";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
