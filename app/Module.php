<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //

     public $table="modules";

      public function Module(){

    	return $this->hasMany('App\Module');
    }
}
