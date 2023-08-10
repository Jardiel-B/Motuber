<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('corridas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpassageiro');
            $table->String('localDeDestino');
            $table->String('localDePartida');
            $table->String('Motorista')->default('Fulano')->nullable();
            $table->enum('formaDePagamento',['Cartão De Crédito','Cartão De Débito','Boleto'])->default('Boleto');
            $table->timestamps();

            $table->foreign('idpassageiro')->references('id')->on('passageiros');
        });
    }

    public function down()
    {
        Schema::drop('corridas');
        Schema::dropIfExists('corridas');
    }
};
