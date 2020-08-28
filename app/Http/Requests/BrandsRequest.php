<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'brand_name' => 'required|unique:brands'
        ];
    }
    public function messages()
    {
        return [
            'brand_name.required'        => 'El nombre de la marca es requerido ',
            'brand_name.unique' => 'Ya existe una esa marca por favor verifique sus datos'
            
        ];
    }
}
