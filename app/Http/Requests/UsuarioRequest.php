<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nome' => 'required',
            'dataDeNascimento' => 'required',
            'sexo' => '',
            'cpf' => 'required|unique:usuarios',
            'telefone' => 'required',
            'cidade' => '',
            'bairro' => '',
            'rua' => '',
            'numero' => '',
            'user_id' => ''
        ];
    }
}
