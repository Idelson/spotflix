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
        Schema::create('listas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('imagem', 120);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('lista_filmes', function(blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('lista_id');
            $table->string('status', 45);
            $table->timestamps();

            $table->foreign('filme_id')->references('id')->on('filmes');
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
        Schema::dropIfExists('lista_filmes');
        Schema::dropIfExists('listas');
    }
};
