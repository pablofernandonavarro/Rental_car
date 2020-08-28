<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'age',
    ];

    public function quotations(){
        return $this->hasMany('App\Quotation');
    }
}
