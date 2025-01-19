<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->updateOrInsert(
            ['email' => 'juan.perez33367@gmail.com'], // Condición de búsqueda
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez33367@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    
        DB::table('alumnos')->updateOrInsert(
            ['email' => 'maria.gonzalez33367@gmail.com'],
            [
                'nombre' => 'María González',
                'email' => 'maria.gonzalez33367@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    
        DB::table('alumnos')->updateOrInsert(
            ['email' => 'carlos.lopez33367@gmail.com'],
            [
                'nombre' => 'Carlos López',
                'email' => 'carlos.lopez33367@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
