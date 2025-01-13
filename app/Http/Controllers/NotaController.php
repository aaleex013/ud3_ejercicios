<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Http\JsonResponse;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Nota::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $nota = Nota::create($request->all());
            return response()->json($nota, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear la nota'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $nota = Nota::find($id);

        if (!$nota) {
            return response()->json(['message' => 'nota no encontrada'], 404);
    }
        return response()->json($nota, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $nota = Nota::find($id);

    if (!$nota) {
        return response()->json(['message' => 'nota no encontrada'], 404);
    }
    $nota = Nota::find($id);
    if(!$nota){
        return response()->json(['message' => 'nota no encontrada'], 404);
    }else{
        $nota->update($request->only('alumno_id', 'asignatura_id', 'nota'));
        return response()->json($nota, 200);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $nota = Nota::find($id);

    if (!$nota) {
        return response()->json(['message' => 'Nota no encontrada'], 404);
    }

    $nota->delete();

    return response()->json(['message' => 'Nota eliminada'], 200);
    }
}
