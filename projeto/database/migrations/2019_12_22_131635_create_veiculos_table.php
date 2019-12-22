<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('carro', 'moto', 'bicicleta');
            $table->unsignedBigInteger('fk_funcionarios_id');
            $table->unsignedBigInteger('fk_alunos_id');
            $table->unsignedBigInteger('fk_estacionamentos_id');

            #foreign keys
            $table->foreign('fk_funcionarios_id')->references('id')->on('funcionario');
            $table->foreign('fk_alunos_id')->references('id')->on('alunos');
            $table->foreign('fk_estacionamentos_id')->references('id')->on('estacionamento');
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
        Schema::dropIfExists('veiculos');
    }
}
