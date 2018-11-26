@extends('adminlte::page')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Consultas</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["consultas.update", $consulta->id], 'method'=>'put'])!!}
    <div class="form-group">
            {!! Form::label('valorConsulta', 'Valor da Consulta:' ) !!}
            {!! Form::number('valorConsulta', $consulta->valorConsulta, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', $consulta->data, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('hora', 'Hora:') !!}
            {!! Form::Time('hora', $consulta->hora, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('tipoDeConsulta', 'Tipo de Consulta:') !!}
            {!! Form::text('tipoDeConsulta', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('anotacoes', 'Anotações:') !!}
            {!! Form::textarea('anotacoes', $consulta->anotacoes, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Consulta', ['class'=>'btn btn-prime'])!!}
            </div>
    {!! Form::close()!!}
</div>
@endsection