<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('especialidade');
            $table->string('sexo', 11);
            $table->string('cro');
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('email', 100)->unique();
            $table->string('cpf', 14)->unique();
            $table->string('rg', 14)->unique();
            $table->date('dataDeNascimento');
            $table->date('dataDoCadastro');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
