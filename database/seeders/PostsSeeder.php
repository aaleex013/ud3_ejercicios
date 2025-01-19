<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            ['usuario_id' => 1, 'titulo' => 'Post 1', 'contenido' => 'Contenido del post 1'],
            ['usuario_id' => 1, 'titulo' => 'Post 2', 'contenido' => 'Contenido del post 2'],
            ['usuario_id' => 1, 'titulo' => 'Post 3', 'contenido' => 'Contenido del post 3'],
            ['usuario_id' => 2, 'titulo' => 'Post 1', 'contenido' => 'Contenido del post 1'],
            ['usuario_id' => 2, 'titulo' => 'Post 2', 'contenido' => 'Contenido del post 2'],
            ['usuario_id' => 2, 'titulo' => 'Post 3', 'contenido' => 'Contenido del post 3'],
            ['usuario_id' => 3, 'titulo' => 'Post 1', 'contenido' => 'Contenido del post 1'],
            ['usuario_id' => 3, 'titulo' => 'Post 2', 'contenido' => 'Contenido del post 2'],
            ['usuario_id' => 3, 'titulo' => 'Post 3', 'contenido' => 'Contenido del post 3'],
        ]);
    }
}
