<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = [ 'usuario_id', 'biografia'];
    public $timestamps = true;

    // relacion inversa con Alumno
    public function alumnos()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id');
    }
}
