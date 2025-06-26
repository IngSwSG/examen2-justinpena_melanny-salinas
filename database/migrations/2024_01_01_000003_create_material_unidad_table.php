<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('material_unidad', function (Blueprint $table) {
            $table->id('idMaterialUnidad');
            $table->integer('cantidad');
            $table->unsignedBigInteger('idUnidad');
            $table->unsignedBigInteger('codigo');
            $table->unsignedBigInteger('codigoPresupuesto');
            $table->timestamps();

            $table->foreign('idUnidad')->references('idUnidad')->on('unidad');
            $table->foreign('codigo')->references('codigo')->on('materiales');
            $table->foreign('codigoPresupuesto')->references('codigoPresupuesto')->on('presupuestos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('material_unidad');
    }
}; 