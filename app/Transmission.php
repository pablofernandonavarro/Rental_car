<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    protected $table = 'transmissions';
    
    protected $fillable = [
        'transmission_name',
        'lang_id',
    ];

    public function cars(){
        return $this->hasMany('App\Car');
    }
    public function langs(){
        return $this->hasMany('App\Lang');
    }
}