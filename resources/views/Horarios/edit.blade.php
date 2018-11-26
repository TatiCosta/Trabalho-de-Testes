@extends('adminlte::page')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Horarios</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["horarios.update", $horario->id], 'method'=>'put'])!!}
    <div class="form-group">
            {!! Form::label('dataHora', 'Data:') !!}
            {!! Form::datetime('dataHora', $horario->dataHora,  ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Horário', ['class'=>'btn btn-primary'])!!}
                <a href="" class="btn btn-default">Cancelar</a>
            </div>
            
    {!! Form::close()!!}
</div>
@endsection