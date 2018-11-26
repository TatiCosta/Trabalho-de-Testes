<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\MedicoRequest;

class MedicosController extends Controller
{
    public function index(){
        $medicos = Medico::orderBy('nome')->paginate(2);
        return view('medicos.index', ['medicos'=>$medicos]);
    }
    public function create(){
        return view('medicos.create');
    }
    public function store(MedicoRequest $request){
        $novo_medico = $request->all();
        Medico::create($novo_medico);

        return redirect()->route('medicos');
    }
    public function destroy($id){
        Servico::find($id)->delete();
        return redirect()->route('servicos');
       
    }
    public function edit($id){
        $medico = Medico::find($id);
        return view('medicos.edit', compact('medico'));
    }
    public function update(MedicoRequest $request,$id){
        $medico = Medico::find($id)->update($request->all());
        return redirect()->route('medicos');
    
    }
}
