<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('dataDeNascimento');
            $table->string('sexo', 11)->nullable();
            $table->string('cpf', 14)->unique();
            $table->string('telefone', 20);
            $table->string('cidade', 50)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('rua', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
