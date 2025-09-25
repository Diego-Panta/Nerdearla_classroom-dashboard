<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    // Una entrega pertenece a un estudiante
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Una entrega pertenece a una tarea
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
