<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::apiResources(['alumnos'=> AlumnoController::class]);
Route::apiResources(['notas'=> NotaController::class]);
Route::apiResources(['asignaturas'=> AsignaturaController::class]);
Route::apiResource(['perfil'=> PerfilController::class]);
Route::apiResource(['posts'=> PostController::class]);
