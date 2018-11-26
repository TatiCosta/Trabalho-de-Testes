@extends('adminlte::page')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Nova Consulta</h3>
        </div>

    <div class="box-body">
       
    @include('includes.alerts')

        {!! Form::open(['route' => 'consultas.masterdetail']) !!}
        
            
            <div class="form-group">
            {!! Form::label('dataHora', 'Data e Hora:') !!}
            {!! Form::dateTime('dataHora', null, ['class'=>'form-control', "required", "placeholder"=>"0000/00/00 00:00:00"]) !!}
            </div>

            <div class="form-group">
            {!! Form::label('anotacoes', 'Anotações:') !!}
            {!! Form::textarea('anotacoes', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <hr/>

            <h4>Serviços</h4>

            <div class="input_fields_wrap"></div>
            <br>

            <button style="float:right;" class="add_field_button btn btn-success">Adicionar serviço</button>
            
            <br>
            <hr />

            <div class="form-group">
                {!! Form::submit('Agendar Consulta', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection

@section('dyn_scripts')
<script>
        $(document).ready(function() {
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");

            var x = 0;
            $(add_button).click(function(e){
                x++;
                var newField = 
                `<div>
                    <div style="width: 94%; float:left" id="servico">
                    {!! Form::select("itens[]",
                        \App\Servico::orderBy("descricao")->pluck("descricao", "id")->
                            toArray(),
                        null,
                        ["class"=>"form-control", "required",
                            "placeholder"=>"Selecione um serviço"])
                        !!}
                    </div>
                    <button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times">
                    </button>
                </div>`;

                $(wrapper).append(newField);
            });

            $(wrapper).on("click",".remove_field", function(e){
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
</script>
@endsection