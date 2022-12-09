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
        //Cria tabela plataformas
        Schema::create('plataformas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Exclui tabela plataformas
        Schema::dropIfExists('plataformas');
    }
};
