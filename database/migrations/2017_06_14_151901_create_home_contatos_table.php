<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->text('descricao');
            $table->string('imagem', 100);
            $table->string('imagem_parallax', 100);
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
        Schema::drop('home_contatos');
    }
}
