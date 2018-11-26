@extends('adminlte::page')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Serviços: {{$servico->descricao}}</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["servicos.update", $servico->id], 'method'=>'put'])!!}
    <div class="form-group">
            {!! Form::label('descricao', 'Descrição:' ) !!}
            {!! Form::text('descricao', $servico->descricao, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('valor', 'Valor' ) !!}
            {!! Form::number('valor', $servico->valor, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Horário', ['class'=>'btn btn-prime'])!!}
            </div>
    {!! Form::close()!!}
</div>
@endsection