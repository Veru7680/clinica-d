<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id(); // ID del paciente
            $table->string('nombre'); // Nombre
            $table->string('apellido'); // Apellido
            $table->string('email')->unique(); // Email
            $table->string('telefono'); // Teléfono
            $table->string('direccion'); // Dirección
            $table->enum('estado', ['activo', 'inactivo'])->default('activo'); // Estado
            $table->timestamps(); // Created_at y updated_at
        });
    }
    
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
