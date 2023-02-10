<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function registro()
    {
        return view('auth.registro');
    }

    //Comprobamos si el email y contraseña son correctos; si lo son, nos redirige a la pag principal, sino, al login
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credenciales = $request->only('email', 'password');
        if (Auth::attempt($credenciales)) {
            return redirect('/')->with('success', 'Sesion iniciada con exito')
                ->with('title', 'Inicio de sesion');
        }

        return redirect("/Login")->with('error', 'Los datos no son validos')
            ->with('title', 'Error');
    }


    //Validamos los datos introducidos, creamos nuevo usuario y redireccionamos
    public function customRegistro(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/")->with('title', 'Registro completo')
            ->with('success', 'Usuario registrado correctamente');
    }

    //Creamos nuevo usuario mediante el modelo User, cifrando la contraseña
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    
    //Cerramos sesion
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('Login');
    }
}
