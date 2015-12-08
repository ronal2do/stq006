<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaleConosco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->nullable();
            $table->string('nascimento');
            $table->string('telefone');
            $table->string('mensagem');
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
        Schema::drop('fale');
    }
}
