<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeudi extends Model
{
    //
    public $table="jeudi";

     public function Jours(){

    	return $this->belongsTo('App\Jours');
    }
}
