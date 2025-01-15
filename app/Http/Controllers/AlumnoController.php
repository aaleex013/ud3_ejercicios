<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Exception;
use Illuminate\Http\JsonResponse;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        
	return response()->json(Alumno::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $alumnos = Alumno::create($request->all());
            return response()->json($alumnos, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear al alumno'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $alumnos = Alumno::find($id);

        if (!$alumnos) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }
    
        return response()->json($alumnos, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $alumnos = Alumno::find($id);
        if(!$alumnos){
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }else{
            $alumnos->update($request->only('nombre', 'email'));
            return response()->json($alumnos, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int$id): JsonResponse
    {
        $alumnos = Alumno::find($id);

    if (!$alumnos) {
        return response()->json(['message' => 'Alumno no encontrado'], 404);
    }

    $alumnos->delete();

    return response()->json(['message' => 'Alumno eliminado'], 200);
    }
}
