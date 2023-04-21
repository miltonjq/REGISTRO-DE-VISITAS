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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('nombres');
            $table->string('apellidos');
            $table->dateTime('fecha_y_hora');
            
            $table->timestamps();
        });
        
        Schema::table('visitas', function (Blueprint $table) {
            $table->unsignedBigInteger('personero_id');
            $table->unsignedBigInteger('oficina_id');
            $table->unsignedBigInteger('sede_id');
            
            $table->foreign('personero_id')->references('id')->on('users');
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->foreign('sede_id')->references('id')->on('sedes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
