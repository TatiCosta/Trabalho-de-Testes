@extends('adminlte::page')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Novo Horário</h3>
        </div>

    <div class="box-body">
       
    @include('includes.alerts')

        {!! Form::open(['url' => 'horarios/store'])!!}

            <div class="form-group">
            {!! Form::label('dataHora', 'Data e Hora:') !!}
            {!! Form::dateTime('dataHora', null, ['class'=>'form-control', "required", "placeholder"=>"0000/00/00 00:00:00"]) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            

        {!! Form::close() !!}

    </div>
@endsection