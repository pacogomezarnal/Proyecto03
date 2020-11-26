<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CursoPost extends FormRequest
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
            'tipo' => ['required',Rule::in(['Proyecto', 'Seminario'])],
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
                'nombre.min' => 'El campo curso debe tener al menos 3 caracteres',
                'tipo.required' => 'No has introducido Tipo',
                'tipo.in' => 'El tipo no es correcto',
            ];
        }
}
