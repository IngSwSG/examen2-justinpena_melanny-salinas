<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('item_requisicion', function (Blueprint $table) {
            $table->id('idItemRequisicion');
            $table->unsignedBigInteger('idRequisicion');
            $table->unsignedBigInteger('codigo');
            $table->integer('cantidad');
            $table->integer('cantidadAprobada')->nullable();
            $table->timestamps();

            $table->foreign('idRequisicion')->references('idRequisicion')->on('requisiciones');
            $table->foreign('codigo')->references('codigo')->on('materiales');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_requisicion');
    }
}; 