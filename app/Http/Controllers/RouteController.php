<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        
        return view('homepage');
    }

    public function Contacto()
    {
        
        return view('contacto', ['Ruta' => 'Contacto']);
    }

    public function C_Direccion()
    {
       
        return view('c_direccion', ['Ruta' => 'Contacto']);
    }

    public function C_Telefono()
    {
       
        return view('c_telefono', ['Ruta' => 'Contacto']);
    }


    public function SN_Historia()
    {
        
        return view('sn_historia', ['Ruta' => 'Historia']);
    }

    public function SN_Mapa()
    {
        
        return view('sn_Mapa', ['Ruta' => 'Mapa']);
    }

    public function SN_Prof()
    {
        return view('sn_prof', [
            'profesores' => Profesor::all(),
            'Ruta' => 'Profesores'
        ]);
    }

    public function Cursos()
    {
        
        return view('cursos', ['Ruta' => 'Cursos']);
    }

}
