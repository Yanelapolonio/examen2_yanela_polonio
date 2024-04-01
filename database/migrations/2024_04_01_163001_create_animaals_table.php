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
        Schema::create('animaals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edad');
            $table->unsignedBigInteger('id_actividad');
            $table->unsignedBigInteger('id_especie');
            $table->unsignedBigInteger('id_recinto');
            $table->timestamps();
            $table->foreign('id_actividad')->references('id')->on('actividads');
            $table->foreign('id_especie')->references('id')->on('especies');
            $table->foreign('id_recinto')->references('id')->on('recintos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animaals');
    }
};
