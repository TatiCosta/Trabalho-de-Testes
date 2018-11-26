@extends('adminlte::page')


@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tipo de Usuário</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('tipousuario.create') !!}">Adicionar Novo</a>
        </h1>
    </section>

    <table class="table table-strped table-bordered table-hover">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Permissão</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tipousuarios as $tp)
                <tr>
                    <td>{{$tp->descricao}}</td>
                    <td>{{$tp->permissao}}</td>
                    <td>
                        <a href="{{route('tipousuario.edit', ['id'=>$tp->id])}}" class="btn-sm btn-success">Editar</a> 
                        <a href="{{route('tipousuario.destroy', ['id'=>$tp->id])}}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
