@extends('adminlte::master')

@section('content')
<div class="box">
        <div class="box-header">
    <h3> Editando Usuário: {{$user->email}}</h3>

</div>

<div class="box-body">
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["user.update", $user->id], 'method'=>'put'])!!}
    <div class="form-group col-sm-6">
            {!! Form::label('email', 'Email:' ) !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('passowrd', 'Senha:') !!}
            {!! Form::date('passowrd', $user->passowrd, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class'=>'btn btn-prime'])!!}
            </div>
    {!! Form::close()!!}
</div>
@endsection