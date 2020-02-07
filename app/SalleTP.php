<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalleTP extends Model
{
    //

    public $table="salle_tp";

     public function Admin(){

    	return $this->belongsTo('App\Admin');
    }
}
