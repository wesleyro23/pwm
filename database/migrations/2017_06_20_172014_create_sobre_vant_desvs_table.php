<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSobreVantDesvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobre_vant_desvs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao');
            $table->boolean('vantdesv');
            $table->string('icone', 100);
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
        Schema::drop('sobre_vant_desvs');
    }
}
