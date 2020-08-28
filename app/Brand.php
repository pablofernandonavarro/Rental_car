<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    
    protected $fillable = [
        'brand_name'
    ];

    public function cars(){
        return $this->hasMany('App\Car');
    }

    public function patterns(){
        return $this->hasMany("App\Pattern");
    }
}
