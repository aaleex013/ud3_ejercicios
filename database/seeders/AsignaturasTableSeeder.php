<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
        ['nombre' => 'Matematicas',
         'descripcion' =>' Asignatura de Matematicas',
         'created_at' => now(),
         'updated_at' => now()],

         ['nombre' => 'Fisica',
          'descripcion' => 'Asignatura de fisica.',
          'created_at' => now(),
          'updated_at' => now()],

         ['nombre' => 'Quimica',
          'descripcion' => 'Asignatura de quimica.',
          'created_at' => now(),
          'updated_at' => now()],
       ]);
    }
}
