<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\UsuarioRequest;
use Auth;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::orderBy('nome')->paginate(2);
        
        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }
    public function create(){
        return view('usuarios.create');
    }
    public function store(UsuarioRequest $request, Usuario $usuario){
        
        $novo_usuario = $request->all();
        Usuario::create($novo_usuario);

        return redirect()->route('usuarios');
    }
    public function destroy($id){
        Usuario::find($id)->delete();
        User::find($id)->delete();
        return redirect()->route('usuarios');
    }
    public function edit($id){
        $usuario = Usuario::find($id);
        $user = User::find($id);
        return view('usuarios.edit', compact('usuario', 'user'));
    }
    public function update(UsuarioRequest $request,$id){
        $usuario = Usuario::find($id)->update($request->all());
        return redirect()->route('usuarios');
    
    }
}

