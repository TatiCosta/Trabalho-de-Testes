@extends('adminlte::page')

@section('content_header')
        <h1 class="pull-left">Usuários</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('register') !!}">Adicionar Novo</a>
        </h1>
        <br>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <form action="{{ route('usuarios.store')}}" method="POST" class="form form-inline">
                <input type="text" name="nome" class="form-control" placeholder="Nome">

                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Sexo</th>                
                        <th>CPF</th>
                        <th>Telefone</th>                
                        <th>Cidade</th>
                        <th>Bairro</th>                
                        <th>Rua</th>
                        <th>Número</th>        
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($usuarios as $pes)
                        <tr>
                            <td>{{$pes->nome}}</td>
                            <td>{{$pes->dataDeNascimento}}</td>
                            <td>{{$pes->sexo}}</td>
                            <td>{{$pes->cpf}}</td>
                            <td>{{$pes->telefone}}</td>
                            <td>{{$pes->cidade}}</td>
                            <td>{{$pes->bairro}}</td>
                            <td>{{$pes->rua}}</td>
                            <td>{{$pes->numero}}</td>
                            <td>
                                <a href="{{route('usuarios.edit', ['id'=>$pes->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('usuarios.destroy', ['id'=>$pes->id])}}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


