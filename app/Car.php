<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'status_id',
        'category_id',
        'brand_id',
        'pattern_id',
        'text_es',
        'text_pt',
        'text_en',
        'transmission_id',
        'passengerCuantity',
        'luggageBigCuantity',
        'luggageSmallCuantity',
    ];
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function category(){
        return $this->belongsTo('App\CategoryCar');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function pattern(){
        return $this->belongsTo('App\Pattern');
    }
    public function transmission(){
        return $this->belongsTo('App\Transmission');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }

}
