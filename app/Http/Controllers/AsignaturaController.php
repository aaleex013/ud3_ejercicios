<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Http\JsonResponse;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Asignatura::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $asignatura = Asignatura::create($request->all());
            return response()->json($asignatura, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear la asignatura'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $asignatura = Asignatura::find($id);

    if (!$asignatura) {
        return response()->json(['message' => 'Asignatura no encontrada'], 404);
    }

    return response()->json($asignatura, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $asignatura = Asignatura::find($id);
        if(!$asignatura){
            return response()->json(['message' => 'asigantura no encontrada'], 404);
        }else{
            $asignatura->update($request->only('nombre', 'descripcion'));
            return response()->json($asignatura, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $asignatura = Asignatura::find($id);

    if (!$asignatura) {
        return response()->json(['message' => 'Asignatura no encontrada'], 404);
    }

    $asignatura->delete();

    return response()->json(['message' => 'Asignatura eliminada'], 200);
    }
}
