<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreExpenditureRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "description"   => "required|min:5",
            "value"         => "required|numeric",
            "datePay"       => "required|date",
            "id_user"       => "required",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }

    // public function messages()
    // {
    //     //If show the field name use :attribute
    //     return[
    //         "required"  => "Este campo é obrigatório",
    //         "min"       => "Este campo deve conter ao menos :min caracteres",
    //         "numeric"   => "Este campo deve conter somente númerops",
    //         "date"      => "Este campo deve conter uma data no formato dd mm yyyy"
    //     ];
    // }
}
