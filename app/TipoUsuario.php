<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $fillable = ['descricao', 'permissao'];

    
    public function pessoa(){
        return $this->hasMany('App\Pessoa');
    }
}
