<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do produto
            $table->integer('quantidade'); // Quantidade em stock
            $table->decimal('preco', 8, 2); // Preço com duas casas decimais
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artigos');
    }
};
