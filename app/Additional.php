<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $table = 'additionals';
    
    protected $fillable = [
        'addtional_image',
    ];
    public function quotations(){
        return $this->belongsToMany('App\Quotation');
    }
    
    public function additionaltexts(){
        return $this->hasMany('App\AdditionalText');
    }
}
