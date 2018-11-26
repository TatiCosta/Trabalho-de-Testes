<?php

namespace App\Http\Controllers;

use App\TipoUsuario;
use App\Pessoa;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\TipoPessoaRequest;

class TipoUsuarioController extends Controller
{
    public function index(){
        $tipopessoas = TipoPessoa::all();
        return view('tipopessoa.index', ['tipopessoas'=>$tipopessoas]);
    }
    public function create(){
        return view('tipopessoa.create');
    }
    public function store(TipoPessoaRequest $request){
        $novo_tipo_pessoa = $request->all();
        TipoPessoa::create($novo_tipo_pessoa);
        return redirect()->route('tipopessoa');
    }
    public function destroy($id){
        TipoPessoa::find($id)->delete();
        return redirect()->route('tipopessoa');
    }
    public function edit($id){
        $tipopessoa = TipoPessoa::find($id);
        return view('tipopessoa.edit', compact('tipopessoa'));
    }
    public function update(TipoPessoaRequest $request,$id){
        TipoPessoa::find($id)->update($request->all());
        return redirect()->route('tipopessoa');
    
    }
}