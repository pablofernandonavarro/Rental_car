<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    protected $table = 'patterns';

    protected $fillable = [
        'pattern_name',
        'brand_id'
    ];

    public function cars(){
        return $this->hasMany('App\Car');
    }
    public function brand(){
        return $this->belongsTo("App\Brand");
    }
}
