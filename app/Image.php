<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    
    protected $fillable = [
        'image_name',
        'car_id'
    ];
    public function car(){
        return $this->belongsTo('App\Car');
    }
}
