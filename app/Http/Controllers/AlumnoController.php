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
        $alumnos = Alumno::all();
	return response()->json(Alumno::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $alumno = Alumno::create($request->all());
            return response()->json($alumno, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear al alumno'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }
    
        return response()->json($alumno, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $alumno = Alumno::find($id);
        if(!$alumno){
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }else{
            $alumno->update($request->only('nombre', 'email'));
            return response()->json($alumno, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int$id): JsonResponse
    {
        $alumno = Alumno::find($id);

    if (!$alumno) {
        return response()->json(['message' => 'Alumno no encontrado'], 404);
    }

    $alumno->delete();

    return response()->json(['message' => 'Alumno eliminado'], 200);
    }
}
