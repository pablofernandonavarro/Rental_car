<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypesRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'type_name' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'type_name.required'        => 'El tipo es requerido ',
             'type_name.unique' => 'Ya existe ese typo por favor verifique sus datos'
            
        ];
    }
}
