<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['usuario_id','titulo','contenido','created_at','updated_at',];
    public $timestamps = true;

    // relacion inversa con Alumno
    public function alumnos()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id');
    }
}
