<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jours extends Model
{
    //

    public $table="jours";

    public function samedi(){

    	return $this->hasOne('App\Samedi');
    }

    public function dimanche(){

    	return $this->hasOne('App\Dimanche');
    }

    public function lundi(){

    	return $this->hasOne('App\Lundi');
    }

      public function mardi(){

    	return $this->hasOne('App\Mardi');
    }

    public function mercredi(){

    	return $this->hasOne('App\Mercredi');
    }

     public function jeudi(){

    	return $this->hasOne('App\Jeudi');
    }
}
