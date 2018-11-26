<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\ServicoRequest;

class ServicosController extends Controller
{
    public function index(){
        $servicos = Servico::orderBy('descricao')->paginate(2);
        return view('servicos.index', ['servicos'=>$servicos]);
    }
    public function create(){
        return view('servicos.create');
    }
    public function store(ServicoRequest $request){
        $novo_servico = $request->all();
        Servico::create($novo_servico);
        //flash('Avaliacao feito com Sucesso')->success();
        return redirect()->route('servicos');
    }
    public function destroy($id){
        try{
            Servico::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMenssage());
        }
        return $ret;
        
    }
    public function edit($id){
        $servico = Servico::find($id);
        return view('servicos.edit', compact('servico'));
    }
    public function update(ServicoRequest $request,$id){
        $servico = Servico::find($id)->update($request->all());
        return redirect()->route('servicos');
    
    }
}