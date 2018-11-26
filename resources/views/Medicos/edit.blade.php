@extends('adminlte::page')

@section('content')
<div class="box">
        <div class="box-header">
        <h3>Editando Medicos: {{$medico->nome}}</h3>

</div>

<div class="box-body">

        @if($errors->any())
            <ul class='alert alert-danger'>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["medicos.update", $medico->id], 'method'=>'put'])!!}
        <div class="form-group col-sm-6">
            {!! Form::label('nome', 'Nome:' ) !!}
            {!! Form::text('nome', $medico->nome, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('especialidade', 'Especialidade:' ) !!}
            {!! Form::text('especialidade', $medico->especialidade, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', 
            array('F' => 'Feminino', 'M' => 'Masculino'), 'F', ['class' =>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('cro', 'CRO:') !!}
            {!! Form::number('cro', $medico->cro, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('rua', 'Rua:') !!}
            {!! Form::text('rua', $medico->rua, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $medico->bairro, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group col-sm-6">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::number('numero', $medico->numero, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $medico->cidade, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::number('telefone', $medico->telefone, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $medico->email, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $medico->cpf, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('rg', 'RG:') !!}
            {!! Form::text('rg', $medico->rg, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('dataDeNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataDeNascimento', $medico->dataDeNascimento, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('dataDoCadastro', 'Data do Cadastro:') !!}
            {!! Form::date('dataDoCadastro', $medico->dataDoCadastro, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-12">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection