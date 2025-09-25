<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Una tarea pertenece a un curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Una tarea puede tener muchas entregas
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    // Un progreso puede estar relacionado con una tarea
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
