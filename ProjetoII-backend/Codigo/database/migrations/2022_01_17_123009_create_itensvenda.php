<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvenda', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto');
            $table->integer('id_venda')->unsigned();
            $table->foreign('id_venda')->references('id')->on('venda');
            $table->integer('quantidade');
            $table->float('valorvenda');
            $table->float('desconto');
            $table->float('lucro');
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
        Schema::dropIfExists('itensvenda');
    }
}
