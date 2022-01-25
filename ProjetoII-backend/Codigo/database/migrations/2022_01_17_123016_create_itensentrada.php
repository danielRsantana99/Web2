<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensentrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensentrada', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto');
            $table->integer('id_entrada')->unsigned();
            $table->foreign('id_entrada')->references('id')->on('entrada');
            $table->integer('quantidade');
            $table->float('precocompra');
            $table->float('icms');
            $table->float('ipi');
            $table->float('frete');
            $table->String('unidade');
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
        Schema::dropIfExists('itensentrada');
    }
}
