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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codigo');
            $table->unsignedBigInteger('profesors_id')->nullable();
            $table->unsignedBigInteger('alumnos_id')->nullable();
           //referenciando la tabla users
            $table->foreign('profesors_id')
                ->references('id')
                ->on('profesors')->onDelete('set null');
            //referenciando la tabla categorias    
            $table->foreign('alumnos_id')
            ->references('id')
            ->on('alumnos')->onDelete('set null');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
