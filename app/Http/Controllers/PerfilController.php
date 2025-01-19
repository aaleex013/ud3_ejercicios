<?php

namespace App\Http\Controllers;

use App\Models\Perfil;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // no hace falta porque es 1:1 con alumno, cada alumno tiene un perfil
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'usuario_id' => 'required|exists:alumnos,id',
                'biografia' => 'nullable|string',
            ]);

            $perfil = Perfil::create($request->all());
            return response()->json($perfil, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el perfil'], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $perfil = Perfil::where('usuario_id', $id)->first();

        if (!$perfil) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        return response()->json($perfil, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $perfil = Perfil::where('usuario_id', $id)->first();

        if (!$perfil) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $perfil->update($request->only('biografia'));
        return response()->json($perfil, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $perfil = Perfil::where('usuario_id', $id)->first();

        if (!$perfil) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $perfil->delete();
        return response()->json(['message' => 'Perfil eliminado'], 200);
    }
}
