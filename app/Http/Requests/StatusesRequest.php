<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusesRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'status_name' => 'required|unique:statuses'
            
        ];
    }
}
