<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Alumno;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id): JsonResponse
    {
        $alumno = Alumno::find($id); // se busca el alumno, ya que un alumno puede tener varios posts
        
        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        $posts = $alumno->posts; 
        return response()->json($posts, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'usuario_id' => 'required|exists:alumnos,id',
                'titulo' => 'required|string',
                'contenido' => 'nullable|string',
            ]);

            $posts = Post::create($request->all());
            return response()->json($posts, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el post'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $posts = Post::find($id);

        if (!$posts) {
            return response()->json(['message' => 'Post no encontrado'], 404);
        }

        return response()->json($posts, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $posts= Post::find($id);

        if (!$posts) {
            return response()->json(['message' => 'Post no encontrado'], 404);
        }
        $posts->update($request->all());
        return response()->json($posts, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $posts = Post::find($id);

        if (!$posts) {
            return response()->json(['message' => 'Post no encontrado'], 404);
        }
        $posts->delete();
        return response()->json(['message' => 'Post eliminado'], 200);
    }
}
