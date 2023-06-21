<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:60'],
            'lastname' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:60'],
            'phone' => ['required', 'string', 'max:30'],
            'documentPhoto' => ['required', 'file', 'mimes:jpg,jpeg,png']
        ];
    }

//    /**
//     * Get the error messages for the defined validation rules.
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return [
//            'name.required' => 'El campo "Nombre" es requerido',
//            'name.max' => 'El campo "Nombre" no debe tener mas de 60 caracteres',
//            'lastname.required' => 'El campo "Apellido" es requerido',
//            'lastname.max' => 'El campo "Apellido" no debe tener mas de 60 caracteres',
//            'document.max' => 'El campo "Documento" no debe tener mas de 15 caracteres',
//            'phone.max' => 'El campo "Teléfono" no debe tener mas de 15 caracteres',
//            'mobilephone.max' => 'El campo "Celular" no debe tener mas de 15 caracteres',
//            'sex.required' => 'El campo "Sexo" es requerido',
//            'email.required' => 'El campo "Email" es requerido',
//            'email.email' => 'El campo "Email" debe tener un formato de email válido',
//            'email.max' => 'El campo "Email" no debe tener mas de 60 caracteres',
//            'coverage.required' => 'El campo "Cobertura" es requerido',
//        ];
//    }
}
