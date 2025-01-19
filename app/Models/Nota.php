<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    
    protected $table = 'notas';
    protected $fillable = ['alumno_id', 'asignatura_id', 'nota'];
    public $timestamps = true;

    public function alumnos()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function asignaturas()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
