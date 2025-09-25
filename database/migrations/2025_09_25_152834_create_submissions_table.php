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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained('tasks');  // Relación con tareas
            $table->foreignId('student_id')->constrained('users');  // Relación con estudiantes
            $table->dateTime('submission_date');  // Fecha de entrega
            $table->enum('status', ['entregado', 'atrasado', 'faltante', 'reentrega'])->default('faltante');  // Estado de la tarea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
