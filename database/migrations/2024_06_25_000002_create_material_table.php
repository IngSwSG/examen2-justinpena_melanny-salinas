<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Material', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('unidadMedida');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->unsignedBigInteger('idCategoria');
            $table->timestamps();

            $table->foreign('idCategoria')->references('idCategoria')->on('Categoria')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Material');
    }
}; 