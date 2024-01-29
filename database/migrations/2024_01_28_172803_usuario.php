<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createUserriosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Chave primária automática
            $table->string('email')->unique(); // Campo de e-mail único
            $table->string('nome');
            $table->string('password');
            $table->timestamps(); // Adiciona created_at e updated_at automaticamente
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
