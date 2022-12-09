<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria tabela lista_usuarios
        Schema::create('lista_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lista_id');
            $table->timestamps();

            //Cria chaves estrangeiras
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lista_id')->references('id')->on('listas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Desativa chaves estrangeiras
        Schema::disableForeignKeyConstraints();
        //Exclui tabela
        Schema::dropIfExists('lista_usuarios');
        //Ativa chaves estrangeiras
        Schema::enableForeignKeyConstraints();
    }
};
