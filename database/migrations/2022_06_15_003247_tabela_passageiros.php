<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('passageiros', function (Blueprint $table) {
            $table->id();
            $table->String('nome');
            $table->String('email')->unique();
            $table->String('senha');
            $table->String('CPF')->unique();
            $table->date('data_de_nascimento');
            $table->String('telefone');
            $table->String('CEP');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passageiros');
    }
};
