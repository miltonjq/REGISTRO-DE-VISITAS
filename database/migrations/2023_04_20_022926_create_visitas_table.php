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
            $table->dateTime('fecha_y_hora_salida')->nullable();
            $table->string('estado');
            $table->string('observaciones')->nullable();
            
            $table->timestamps();
        });
        
        Schema::table('visitas', function (Blueprint $table) {
            $table->unsignedBigInteger('personero_id');
            $table->unsignedBigInteger('oficina_id');

            
            $table->foreign('personero_id')->references('id')->on('users');
            $table->foreign('oficina_id')->references('id')->on('oficinas');

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
