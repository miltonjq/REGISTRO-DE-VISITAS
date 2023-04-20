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
            $table->string('sede');
            $table->string('oficina');
            
            
            $table->timestamps();
        });
        
        Schema::table('visitas', function (Blueprint $table) {
            $table->unsignedBigInteger('personero_id');
            
            $table->foreign('personero_id')->references('id')->on('users');
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
