<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalleTD extends Model
{
    //

     public $table="salle_td";

     public function Admin(){

    	return $this->belongsTo('App\Admin');
    }
}
