<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nome', 'especialidade', 'sexo', 'cro', 'rua', 'bairro', 'numero', 'cidade', 'telefone', 'email', 'cpf', 'rg', 'dataDeNascimento', 'dataDoCadastro'];

}
