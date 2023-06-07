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
        Schema::create('oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oficina');
            $table->string('abrev_oficina')->nullable();
            $table->string('piso');
            $table->timestamps();
        });
        
        Schema::table('oficinas', function (Blueprint $table) {
            $table->unsignedBigInteger('sede_id');
            
            $table->foreign('sede_id')->references('id')->on('sedes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oficinas');
    }
};
