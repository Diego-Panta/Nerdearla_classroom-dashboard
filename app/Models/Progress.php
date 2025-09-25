<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    // Un progreso pertenece a un estudiante
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Un progreso pertenece a una tarea
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
