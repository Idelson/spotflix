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
        //Cria a tabela de classificações
        Schema::create('classificacoes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao',20);
            $table->timestamps();
            $table->softDeletes(); //Exclusão lógica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Excluir a tabela
        Schema::dropIfExists('classificacoes');
    }
};
