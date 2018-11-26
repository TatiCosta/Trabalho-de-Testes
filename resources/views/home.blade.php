@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        
        
      
          <li class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
              <div class="small-box bg-teal">
              <div class="inner">
                <h3>Adicionar Pacientes</h3>

                <p> Pacientes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="usuarios/create" class="small-box-footer">Adicionar Usuários <i class="fa fa-arrow-circle-right"></i></a>

            </li>
            
            

            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
              <div class="small-box bg-orange">
              <div class="inner">
                <h3>Cadastrar Médicos</h3>

                <p>Médicos</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="medicos/create" class="small-box-footer">Médicos <i class="fa fa-arrow-circle-right"></i></a>

            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
              <div class="small-box bg-primary">
              <div class="inner">
                <h3>Agendar Consulta</h3>

                <p>Consultas</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="consultas/create" class="small-box-footer">Agendar Consulta <i class="fa fa-arrow-circle-right"></i></a>

            </li>

        <li class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
              <div class="small-box bg-primary ">
              <div class="inner">
                <h3>Agenda</h3>

                <p>Ver agenda</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="consultas" class="small-box-footer">Agenda <i class="fa fa-arrow-circle-right"></i></a>

            </li>
        
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
          
          
@stop