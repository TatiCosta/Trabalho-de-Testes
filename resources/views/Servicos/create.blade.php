@extends('adminlte::page')


@section('content')
<div class="box">
        <div class="box-header">
        <h3>Novo Serviço</h3>

        <div class="box-body">
        @include('includes.alerts')

        {!! Form::open(['route' => 'servicos.store']) !!}

            <div class="form-group">
            {!! Form::label('descricao', 'Descrição:' ) !!}
            {!! Form::text('descricao', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group ">
            {!! Form::label('valor', 'Valor' ) !!}
            {!! Form::number('valor', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group ">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection