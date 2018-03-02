<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePortifoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_portifolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_homeportfilters')->unsigned();
            $table->foreign('id_homeportfilters')->references('id')->on('home_portifolio_filters');
            $table->string('titulo',100);
            $table->string('imagem', 100);
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
        Schema::drop('home_portifolios');
    }
}
