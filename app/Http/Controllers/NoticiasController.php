<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('noticias', [
            'noticias' => Noticia::all(),
            'Ruta' => 'Noticias'
        ]);
    }


    //noticia especifica
    public function Noticia($id)
    {
        $Noticia = Noticia::find($id);
        $mensaje = Mensaje::where('NoticiaID', $id)->get();

        return view('noticia', [
            'noticia' => $Noticia,
            'Ruta' => $Noticia['titulo'],
            'news' => Noticia::all(), //para el frontend pasamos todas las noticias
            'mensajes' => $mensaje
        ]);
    }
}
