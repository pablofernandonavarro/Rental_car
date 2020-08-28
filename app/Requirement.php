<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = 'requirements';

    protected $fillable = [
       'requirement_name',
       'lang_id',
    ];
    public function lang(){
        return $this->belongsTo('App\Lang');
    }
}
