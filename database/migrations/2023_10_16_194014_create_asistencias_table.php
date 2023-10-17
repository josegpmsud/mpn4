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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('matricula_id');
            $table->foreign('matricula_id')
                ->references('id')
                ->on('matriculas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('fecha');
            $table->enum('asistio', ['A', 'T', 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
