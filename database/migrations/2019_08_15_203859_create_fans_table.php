<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('telefone');
            $table->string('email');
            $table->string('ativo');
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
        Schema::dropIfExists('fans');
    }
}
