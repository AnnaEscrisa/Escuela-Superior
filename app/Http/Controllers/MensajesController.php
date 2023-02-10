<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function Index(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Mensaje' => 'required',
        ]);

        $data = $request->all();
        $check = $this->CrearMensaje($data);

        return back();
    }

    //Creamos nuevo coment mediante el modelo "mensaje"
    public function CrearMensaje(array $data)
    {
        return Mensaje::create([
            'NoticiaId'=> $data['id'],
            'Autor' => $data['Nombre'],
            'Comentario' => $data['Mensaje'],
            'Avatar' => 'avatar.png'
        ]);
    }
}
