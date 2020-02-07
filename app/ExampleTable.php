<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExampleTable extends Model
{
    //

    public $table="example_tables";

     public function Jours(){

    	return $this->hasMany('App\Jours');
    	
    }
}
