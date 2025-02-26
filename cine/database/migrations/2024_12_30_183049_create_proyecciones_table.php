<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //se le cambia el nombre de la migracion y el parametro del create y el down, no sigue convenio de laravel
    public function up(): void
    {
        Schema::create('proyecciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id')->constrained();
            $table->timestamp('fecha_hora');
            $table->foreignId('sala_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecciones');
    }
};
