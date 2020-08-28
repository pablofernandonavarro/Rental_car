<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $table = 'langs';

    protected $fillable = [
        'lang_name',
        'lang_abbreviation',
    ];

    public function  categotycar(){
        return $this->hasMany('App\CategotyCar');
    }

    public function  categoryfaqs(){
        return $this->hasMany('App\CategotyFaq');
    }

    public function  faqs(){
        return $this->hasMany('App\Faq');
    }

    public function  categoryhotels(){
        return $this->hasMany('App\CategoryHotel');
    }

    public function  requirements(){
        return $this->hasMany('App\Requirement');
    }

    public function  transmissions(){
        return $this->hasMany('App\Transmission');
    }

    public function additionaltexts(){
        return $this->hasMany('App\AdditionalText');
    }

}
