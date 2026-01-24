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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');       // Título del banner
            $table->string('texto');        // Texto (del botón o secundario)
            $table->text('descripcion');    // Descripción
            $table->string('imagen');       // Ruta de la imagen en el servidor
            $table->boolean('activo')->default(true); // Para poder ocultarlo si quieres
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
