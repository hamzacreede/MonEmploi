<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amphi extends Model
{
    //

    public $table="amphi";

     public function Admin(){

    	return $this->belongsTo('App\Admin');
    }
}
