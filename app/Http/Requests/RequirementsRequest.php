<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequirementsRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'requirement_name' => 'required',
            'requirement_name' => 'unique:requirements',
        ];
    }
}
