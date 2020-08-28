<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';

    protected $fillable = [
        'hotel_name',
        'category_id',
        'address',
        'location',
        'phone',
        'email',
        'website',
        'discount',
        'promotion',
        'hotel_image'
    ];
    public function category(){
        return $this->belongsTo('App\CategoryHotel');
    }

}
