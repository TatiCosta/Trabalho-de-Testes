@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h3>Cadastrar Tipo de Usuário</h3>

        {!! Form::open(['url' => 'tipoususario/store'])!!}
            <div class="form-group">
            {!! Form::label('descricao', 'Descrição:' ) !!}
            {!! Form::text('descricao', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('permissao', 'Permissão:') !!}
            {!! Form::select('permissao', 
            array('Admin' => 'Admin', 'Usuário' => 'Usuário'), 'Admin', ['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection