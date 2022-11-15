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
        Schema::create('minha_listas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('imagem', 120);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('filme_lista_filmes', function(blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('minha_lista_id');
            $table->string('status', 45);

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('minha_lista_id')->references('id')->on('minha_listas');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filme_lista_filmes');
        Schema::dropIfExists('minha_listas');
    }
};
