<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [
            'additional_name_es' => 'required',
            'additional_description_es' => 'required',
            'additional_name_en' => 'required',
            'additional_description_en' => 'required',
            'additional_name_pt' => 'required',
            'additional_description_pt' => 'required',
            'additional_image'  =>'required',
        ];


    }
    public function messages()
    {
        return [
            'additional_name.required'        => 'El nombre del adicional es requerido ',
            'additional_description.required' => 'La descripcion del adicional es requerida',
            'additional_image.required'        => 'Debe existir la imagen'
        ];
    }
}
