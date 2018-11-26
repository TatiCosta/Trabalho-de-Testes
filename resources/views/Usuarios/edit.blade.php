@extends('adminlte::page')

@section('content')
<div class="box">
        <div class="box-header">
    <h3> Editando Usuário: {{$usuario->nome}}</h3>

</div>

<div class="box-body">
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["usuarios.update", $usuario->id], 'method'=>'put'])!!}
    <div class="form-group col-sm-6">
            {!! Form::label('nome', 'Nome:' ) !!}
            {!! Form::text('nome', $usuario->nome, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('dataDeNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataDeNascimento', $usuario->dataDeNascimento, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', 
            array('F' => 'Feminino', 'M' => 'Masculino'), 'F', ['class' =>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $usuario->cpf, ['class'=>'form-control', 'require']) !!}
            </div>

           <div class="form-group col-sm-6">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::number('telefone', $usuario->telefone, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $usuario->cidade, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group col-sm-6">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $usuario->bairro, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('rua', 'Rua:') !!}
            {!! Form::text('rua', $usuario->rua, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::number('numero', $usuario->numero, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class'=>'btn btn-prime'])!!}
            </div>
    {!! Form::close()!!}
</div>
@endsection