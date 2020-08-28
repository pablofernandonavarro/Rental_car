<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'category_id',
        'lang_id',
    ];
    public function category(){
        return $this->belongsTo("App\CategoryFaq");
    }
    public function langs(){
        return $this->hasMany('App\Lang');
    }
}
