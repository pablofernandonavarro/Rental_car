<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryHotel extends Model
{
    protected $table = 'category_hotels';
    protected $fillable = [
        'category_hotel_name',
        'lang_id',

    ];
    public function hotels(){
        return $this->hasMany('App\Hotel');
    }
    public function langs(){
        return $this->hasMany('App\Lang');
    }
}
