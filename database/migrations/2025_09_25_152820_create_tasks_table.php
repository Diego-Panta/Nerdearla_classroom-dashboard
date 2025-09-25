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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_id')->unique();  // ID de tarea en Google Classroom
            $table->foreignId('course_id')->constrained('courses');  // Relación con cursos
            $table->string('title');  // Título de la tarea
            $table->text('description');  // Descripción de la tarea
            $table->dateTime('due_date');  // Fecha de entrega
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
