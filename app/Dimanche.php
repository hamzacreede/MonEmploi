<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimanche extends Model
{
    //

    public $table="dimanche";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
