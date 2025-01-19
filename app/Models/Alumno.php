<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    
    protected $table = 'alumnos';
    protected $fillable = ['nombre', 'email'];
    public $timestamps = false;

    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'notas')->withPivot('nota')->withTimestamps();
    }


    // relacion uno a muchos (1:N) con Post
    public function posts()
    {
        return $this->hasMany(Post::class, 'usuario_id');
    }

    // relacion uno a uno (1:1) con Perfil
    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'usuario_id');
    }
}
