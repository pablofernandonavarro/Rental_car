<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'status_name'
    ];

    public function cars(){
        return $this->hasMany('App\Car');
    }
}
