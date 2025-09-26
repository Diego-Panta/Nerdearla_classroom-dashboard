<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'google_classroom_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Un usuario pertenece a un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Un usuario puede tener muchos cursos (si es profesor)
    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    // Un usuario puede tener muchas entregas de tareas (si es estudiante)
    public function submissions()
    {
        return $this->hasMany(Submission::class, 'student_id');
    }

    // Un usuario puede tener muchos progresos
    public function progress()
    {
        return $this->hasMany(Progress::class, 'student_id');
    }

    // Método para verificar si el usuario es Estudiante
    public function isStudent()
    {
        return $this->role->name === 'Estudiante';
    }

    // Método para verificar si el usuario es Profesor
    public function isTeacher()
    {
        return $this->role->name === 'Profesor';
    }

    // Método para verificar si el usuario es Coordinador
    public function isCoordinator()
    {
        return $this->role->name === 'Coordinador';
    }
}
