<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $fillable = ['nombre', 'descripcion'];
    public $timestamps = false;

}

