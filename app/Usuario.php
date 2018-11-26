<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoUsuario;
use App\Usuario;

class Usuario extends Model
{
    protected $fillable = ['nome', 'dataDeNascimento', 'sexo', 'cpf', 'telefone', 'cidade', 'bairro', 'rua', 'numero', 'user_id'];

    public function user(){
        return $this->belongsTo('App\user');
    }
}
