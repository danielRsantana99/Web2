<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->integer('id_carro')->unsigned();
            $table->foreign('id_carro')->references('id')->on('carro');
            $table->integer('id_motor')->unsigned();
            $table->foreign('id_motor')->references('id')->on('motor');
            $table->integer('id_valvula')->unsigned();
            $table->foreign('id_valvula')->references('id')->on('valvula');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->integer('id_marca')->unsigned();
            $table->foreign('id_marca')->references('id')->on('marca');
            $table->integer('id_fabricacao')->unsigned();
            $table->foreign('id_fabricacao')->references('id')->on('fabricacao');
            $table->integer('id_localizacao')->unsigned();
            $table->foreign('id_localizacao')->references('id')->on('localizacao');
            $table->float('quantidade');
            $table->float('icms');
            $table->float('ipi');
            $table->float('frete');
            $table->float('valornafabrica');
            $table->float('valordecompra');
            $table->float('valorvenda');
            $table->float('desconto');
            $table->float('lucro');
            $table->String('unidade');
            $table->String('referencia');
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
        Schema::dropIfExists('produto');
    }
}
