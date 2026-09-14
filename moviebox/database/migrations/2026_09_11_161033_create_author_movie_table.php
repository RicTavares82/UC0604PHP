<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('author_movie', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained();
            $table->foreignId('movie_id')->constrained();
            $table->primary(['author_id', 'movie_id']);

            ///------
            /*
            $table->id();//campo ID, unsigned long , primary key auto increment
            $table->bigInteger('id')->unsigned();
            $table->primary('id')->autoIncrement();
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_movie');
    }
};
