<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoPost extends FormRequest
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
        return[
            'nombre' => 'required|min:3',
            'apellido1' => 'required|min:2',
            'apellido2' => 'required|min:2',
            'correo' => 'required|unique:App\Models\Alumno,correo'
        ];
    }
            /**
         * Get the error messages for the defined validation rules.
         *
         * @return array
         */
        public function messages()
        {
            return [
                'nombre.required' => 'No has introducido un nombre',
                'nombre.min' => 'El campo nombre debe tener al menos 3 caracteres',
                'apellido1.required' => 'No has introducido Apellido 1',
                'apellido2.required' => 'No has introducido Apellido 2',
                'correo.required' => 'No has introducido el correo',
            ];
        }
}
