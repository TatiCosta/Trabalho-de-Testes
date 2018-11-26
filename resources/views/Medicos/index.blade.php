@extends('adminlte::page')



@section('content_header')
        <h1 class="pull-left">Medicos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('medicos.create') !!}">Adicionar Novo</a>
        </h1>
        <br>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <form action="" method="POST" class="form form-inline">
                <input type="text" name="id" class="form-control" placeholder="ID">

                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>Sexo</th>                
                        <th>CRO</th>
                        <th>Rua</th>                
                        <th>Bairro</th>
                        <th>Número</th>   
                        <th>Cidade</th>                
                        <th>Telefone</th>
                        <th>E-mail</th>  
                        <th>CPF</th>     
                        <th>RG</th> 
                        <th>Data de Nascimento</th> 
                        <th>Data do Cadastro</th>  
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($medicos as $med)
                        <tr>
                            <td>{{$med->nome}}</td>
                            <td>{{$med->especialidade}}</td>
                            <td>{{$med->sexo}}</td>
                            <td>{{$med->cro}}</td>
                            <td>{{$med->rua}}</td>
                            <td>{{$med->bairro}}</td>
                            <td>{{$med->numero}}</td>
                            <td>{{$med->cidade}}</td>
                            <td>{{$med->telefone}}</td>
                            <td>{{$med->email}}</td>
                            <td>{{$med->cpf}}</td>
                            <td>{{$med->rg}}</td>
                            <td>{{$med->dataDeNascimento}}</td>
                            <td>{{$med->dataDoCadastro}}</td>
                            <td>
                                <a href="{{route('medicos.edit', ['id'=>$med->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('medicos.destroy', ['id'=>$med->id])}}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


