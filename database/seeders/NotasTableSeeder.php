<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
        ['alumno_id' => 1,
         'asignatura_id' => 1,
         'nota' => 8.5,
         'created_at' => now(), 'updated_at' => now()],


        ['alumno_id' => 2,
         'asignatura_id' => 2,
         'nota' => 7.0,
         'created_at' => now(), 'updated_at' => now()],


        ['alumno_id' => 3,
         'asignatura_id' => 3,
         'nota' => 9.0,
         'created_at' => now(), 'updated_at' => now()],
    ]);
    }
}
