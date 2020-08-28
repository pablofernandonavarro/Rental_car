<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            // 'quotation_name.required'                               => 'El nombre es requerido',
            // 'quotation_email.required'                              => 'El mail es requerido',
            // 'quotation_email.email'                                 => 'El mail no es un mail valido',
            // 'quotation_phone.required'                              => 'El telefono es requerido',
            // 'quotation_phone.numeric'                               => 'El telefono no es valido',
            // // 'quotation_first_date.required'                         => 'La fecha es requerida',
            // // 'quotation_first_date.date'                             => 'Corrigir el formato de la fecha',
            // // 'quotation_first_date.after'       => 'La fecha debe ser posterior al dia de hoy',
            // // 'quotation_last_date.required'                          => 'La fecha es requerida',
            // // // 'quotation_last_date.date'                              => 'Debe corregir el formato de la fecha',
            // // 'quotation_last_date.after'   => 'La fecha debe ser posterior a la fecha de entrega ',
            // 'retreatPlace.required'                                 => 'El lugar de entrega es requerido',
            // 'returnPlace.requiered'                                 => 'El lugarr de devolicíon es requerido',

        ];
    }
    public function rules()
    {
        return [
            'quotation_name'=> 'required',
            'quotation_email'=> 'required',
            'quotation_email'=> 'email:rfc,dns',
            'quotation_phone'=> 'numeric',
            // // 'quotation_first_date' => 'required|after:today',
            // // 'quotation_last_date' => 'required|after:quotation_first_date',
            // 'retreatPlace' => 'string|required',
            // 'returnPlace' => 'string|required',
        ];
    }
}
