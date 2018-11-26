@extends('adminlte::page')

@section('content')
<div class="box">
        <div class="box-header">
        <h3>Cadastrar Usuário</h3>

</div>

    <div class="box-body">
    @include('includes.alerts')

            {!! Form::open(['url' => 'usuarios/store'])!!}

                <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:' ) !!}
                {!! Form::text('nome', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('dataDeNascimento', 'Data de Nascimento:') !!}
                {!! Form::date('dataDeNascimento', 'aaaa-mm-dd', ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('sexo', 'Sexo:') !!}
                {!! Form::select('sexo', 
                array('F' => 'Feminino', 'M' => 'Masculino'), null, ['class' =>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::number('telefone', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Número:') !!}
                {!! Form::number('numero', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}
    </div>
@endsection