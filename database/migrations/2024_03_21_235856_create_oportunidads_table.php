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
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oportunidad', 45);
            $table->decimal('monto', 10, 2); // Ajuste para soportar valores más grandes y dos decimales
            $table->date('fecha_cierre');
            $table->boolean('estatus')->default(1); // Asumimos que el default es 'abierta'
            $table->text('notas')->nullable();
            $table->foreignId('prospectos_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidads');
    }
};
