<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatternsRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'pattern_name' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'pattern_name.required'        => 'El nombre del modelo es requerido ',
            // 'brand_name.unique' => 'Ya existe una esa marca por favor verifique sus datos'
            
        ];
    }
}
