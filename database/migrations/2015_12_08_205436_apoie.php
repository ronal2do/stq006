<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apoie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->nullable();
            $table->string('nascimento');
            $table->string('titulo');
            $table->string('telefone');
            $table->string('cep');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('endereco');
            $table->string('numero');
            $table->string('informacoes');
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
        Schema::drop('apoie');
    }
}
