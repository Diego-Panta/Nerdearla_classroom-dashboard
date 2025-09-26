<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los roles
        $estudianteRole = Role::where('name', 'Estudiante')->first();
        $profesorRole = Role::where('name', 'Profesor')->first();
        $coordinadorRole = Role::where('name', 'Coordinador')->first();

        // Crear usuarios de prueba
        $users = [
            // Estudiante
            [
                'name' => 'Juan Pérez',
                'email' => 'estudiante@test.com',
                'password' => Hash::make('password'),
                'role_id' => $estudianteRole->id,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'María García',
                'email' => 'maria@test.com',
                'password' => Hash::make('password'),
                'role_id' => $estudianteRole->id,
                'email_verified_at' => now(),
            ],
            // Profesor
            [
                'name' => 'Dr. Carlos López',
                'email' => 'profesor@test.com',
                'password' => Hash::make('password'),
                'role_id' => $profesorRole->id,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Dra. Ana Martínez',
                'email' => 'ana@test.com',
                'password' => Hash::make('password'),
                'role_id' => $profesorRole->id,
                'email_verified_at' => now(),
            ],
            // Coordinador
            [
                'name' => 'Lic. Roberto Silva',
                'email' => 'coordinador@test.com',
                'password' => Hash::make('password'),
                'role_id' => $coordinadorRole->id,
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
