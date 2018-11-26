@extends('adminlte::page')


@section('content')
<div class="conteiner-fluid">
    <h3> Editando Tipo Usuário:</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["tipousuario.update", $tipousuario->id], 'method'=>'put'])!!}
    <div class="form-group">
            {!! Form::label('descricao', 'Descrição:' ) !!}
            {!! Form::text('descricao', $tipousuario->descricao, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('permissao', 'Permissão:') !!}
            {!! Form::select('permissao', 
            array('A' => 'Admin', 'U' => 'Usuário'), 'A', ['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Tipo Usuário', ['class'=>'btn btn-prime'])!!}
            </div>
    {!! Form::close()!!}
</div>
@endsection