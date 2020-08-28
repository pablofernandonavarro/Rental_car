<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryCar extends Model
{
    protected $table = 'category_cars';

    protected $fillable = [
        'category_car_name',
        'lang_id',
    ];
    public function cars(){
        return $this->hasMany('App\Car');
    }
    public function qutations(){
        return $this->hasMany('App\Quotation');
    }
    public function langs(){
        return $this->hasMany('App\Lang');
    }

}
