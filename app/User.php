<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','description', 'université', 'adresse', 'wilaya','specialité', 'phone', 'heure_travail_debut', 'heure_travail_fin','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 public $table="users";

    public function messages(){

        return $this->belongsTo('app\messages');
    }


    public function RDV(){

        return $this->belongsTo('app\RDV');
    }
}
