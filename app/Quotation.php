<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';

    protected $fillable = [
        "client_id",
        "retreat_place",
        "return_place",
        "first_date",
        "last_date",
        "comments",
        "category",
    ];

    protected $dates = [
        "first_date",
        "last_date",

    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }
    public function additionals(){
        return $this->belongsToMany('App\Additional');
    }
    public function category_car(){
        return $this->belongsTo('App\CategoryCar');
    }
}
