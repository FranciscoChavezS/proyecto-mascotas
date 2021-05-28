<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'nombreM' => 'required',
            'foto' => 'required',
            'fecha' => 'required',
            'raza' => 'required',
            'comentario' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'nombreM.required' => 'El campo nombre de mascota es requerido',
            'foto.required' => 'El campo foto es requerido',
            'fecha.required' => 'El campo fecha es requerido',
            'raza.required' => 'El campo raza es requerido',
            'comentario.required' => 'El campo comentario es requerido'
        ];
    }
}
