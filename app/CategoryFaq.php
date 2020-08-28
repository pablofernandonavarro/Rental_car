<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFaq extends Model
{
    protected $table = 'category_faqs';

    protected $fillable = [
        'category_faq_name',
        'lang_id',
    ];
    public function faqs(){
        return $this->hasMany('App\Faq');
    }
    public function langs(){
        return $this->hasMany('App\Lang');
    }
}
