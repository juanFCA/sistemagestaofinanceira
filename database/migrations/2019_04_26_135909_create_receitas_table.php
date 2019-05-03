<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('nome');
            $table->decimal('valor');
            $table->date('data_vencimento');
            $table->string('descricao');
            $table->bigInteger('categoria_id')->unsigned()->nullable();
            $table->string('forma_pagamento');
            $table->boolean('disponivel');
            $table->boolean('fixa');
            $table->boolean('recorrente');
            $table->integer('num_meses');
            $table->timestamps();
            
            $table->foreign('user_id')-> references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receitas');
    }
}
