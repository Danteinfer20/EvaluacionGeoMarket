<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publication;
use App\Models\Comment;
use App\Models\Seller;

class OrmController extends Controller
{
    // Consulta 1: Obtener un usuario con su rol
    public function consultaUsuarioRol()
    {
        $user = User::find(1);
        return response()->json([
            'usuario' => $user->primer_nombre,
            'email' => $user->email,
            'rol' => $user->role->nombre ?? 'Sin rol'
        ]);
    }

    // Consulta 2: Obtener todos los comentarios de una publicación
    public function consultaComentariosPublicacion()
    {
        $publication = Publication::find(1);
        return response()->json([
            'publicacion' => $publication->titulo,
            'precio' => $publication->precio,
            'comentarios' => $publication->comments
        ]);
    }
}

  