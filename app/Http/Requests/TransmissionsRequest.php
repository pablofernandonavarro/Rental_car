<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransmissionsRequest extends FormRequest
{
   
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'transmission_name' => 'required|unique:transmissions'
        ];
    }
}
