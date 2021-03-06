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
            $table->enum('tipo', ['carro', 'moto', 'bicicleta']);
            $table->unsignedBigInteger('fk_funcionarios_id');
            $table->unsignedBigInteger('fk_alunos_id');
            $table->unsignedBigInteger('fk_estacionamentos_id')->nullable();

            #foreign keys
            $table->foreign('fk_funcionarios_id')->references('id')->on('funcionarios');
            $table->foreign('fk_alunos_id')->references('id')->on('alunos');
            $table->foreign('fk_estacionamentos_id')->references('id')->on('estacionamentos');
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
