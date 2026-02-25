<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('editora')->nullable();
            $table->string('isbn')->unique();
            $table->integer('ano_publicacao')->nullable();
            $table->string('genero')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('quantidade')->default(1);
            $table->integer('paginas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
