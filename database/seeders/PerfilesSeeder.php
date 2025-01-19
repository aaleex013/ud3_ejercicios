<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfil')->updateOrInsert(
            ['usuario_id' => 1],  // Condición de búsqueda
            ['biografia' => 'Juan Pérez es un estudiante de matemáticas']  // Valores a insertar/actualizar
        );
    
        DB::table('perfil')->updateOrInsert(
            ['usuario_id' => 2],
            ['biografia' => 'María López es una estudiante de historia']
        );
    
        DB::table('perfil')->updateOrInsert(
            ['usuario_id' => 3],
            ['biografia' => 'Carlos García es un estudiante de ciencias']
        );
    }
}
