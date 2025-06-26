<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->string('idUsuario')->primary();
            $table->integer('identification');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->unsignedBigInteger('idUnidad');
            $table->timestamps();

            $table->foreign('idUnidad')->references('idUnidad')->on('Unidad')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Usuario');
    }
}; 