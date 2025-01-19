<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnosTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AlumnosTableSeeder::class);
        $this->call(AsignaturasTableSeeder::class);
        $this->call(NotasTableSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(PostsSeeder::class);

    }
}
