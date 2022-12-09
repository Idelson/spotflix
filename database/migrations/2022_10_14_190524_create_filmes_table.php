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
        //Cria tabela filmes
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->integer('ano');
            $table->string('duracao', 10);
            $table->string('imagem', 120);
            $table->unsignedBigInteger('classificacoe_id');
            $table->timestamps();
            $table->softDeletes();

            //Cria chave estrangeira
            $table->foreign('classificacoe_id')->references('id')->on('classificacoes');
            
        });

        //Cria tabela filme_plataformas
        Schema::create('filme_plataformas', function(Blueprint $table){
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('plataforma_id');

            //Cria chave estrangeira
            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('plataforma_id')->references('id')->on('plataformas');
        });
        //Cria tabela filme_categorias
        Schema::create('filme_categorias', function(Blueprint $table){
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('categoria_id');

            //Cria chave estrangeira
            $table->foreign('filme_id')->references('id')->on('filmes');
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
        //Desativa os relacionamentos
        Schema::disableForeignKeyConstraints();

        //Excluir tabelas
        Schema::dropIfExists('filme_categorias');
        Schema::dropIfExists('filme_plataformas');
        Schema::dropIfExists('filmes');

        //Ativa os relacionamentos
        Schema::enableForeignKeyConstraints();
    }
};
