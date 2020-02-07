<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

     public $table="admin";

    public function Amphi(){

    	return $this->hasMany('App\Amphi');
    }

    public function SalleTD(){

    	return $this->hasMany('App\SalleTD');
    }

    public function SalleTP(){

    	return $this->hasMany('App\SalleTP');
    }

      public function ExampleTable(){

    	return $this->hasMany('App\ExampleTable');
    }
}
