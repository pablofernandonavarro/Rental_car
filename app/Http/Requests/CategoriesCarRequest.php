<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_car_name' => 'required',
            // 'category_car_name' => 'unique:category_cars'
           
        ];
    }
    public function messages()
    {
        return [
            'category_car_name.required'        => 'El nombre de la categoria es requerido ',
            // 'category_car_name.unique' => 'Ya existe una esa marca por favor verifique sus datos'
            
        ];
    }
}
