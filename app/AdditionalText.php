<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalText extends Model
{
    protected $table = 'additional_texts';

    protected $fillable = [
        'additional_id',
        'additional_name',
        'additional_description',
        'lang_id',
    ];
    public function additional(){
        return $this->belongsTo('App\Additional');
    }
    
    public function lang(){
        return $this->belongsTo('App\Lang');
    }
}
