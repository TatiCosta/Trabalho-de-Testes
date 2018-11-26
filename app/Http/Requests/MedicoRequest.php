<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'especialidade' => 'required',
            'sexo' => 'required',
            'cro' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'numero' => 'required|numeric',
            'cidade' => 'required',
            'telefone' => 'required|numeric',
            'email' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'dataDeNascimento' => 'required',
            'dataDoCadastro' => 'required',
        ];
    }
}
