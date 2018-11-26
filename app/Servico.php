<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $casts = [
        'valor' => 'double',
    ];
    protected $fillable = ['descricao', 'valor'];

    public function consulta(){
        return $this->hasMany('App\Consulta');
    }
}
