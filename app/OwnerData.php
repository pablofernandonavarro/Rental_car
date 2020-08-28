<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerData extends Model
{
    protected $table = 'owner_data';

    protected $fillable = [
        'owner_name',
        'owner_address',
        'owner_phone1',
        'owner_phone2',
        'owner_mail1',
        'owner_mail1'
    ];
}
