<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Un curso pertenece a un profesor (User)
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    // Un curso puede tener muchas tareas
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
