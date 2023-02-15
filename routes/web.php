<?php

use App\Models\Noticia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\NoticiasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Homepage
Route::get('/', [RouteController::class, 'index'])->name('Homepage');


//Contacto
Route::get('/Contacto', [RouteController::class, 'Contacto']);


//Sobre-Nosotros
Route::prefix('/Sobrenosotros')->group(function () {
    Route::controller(RouteController::class)->group(function () {
        Route::get('/Historia', 'sn_historia');
        Route::get('/Mapa', 'sn_mapa');
        Route::get('/Profesorado', 'sn_prof');
    });
});

//Cursos
Route::get('/Cursos', [RouteController::class, 'Cursos']);


//Noticias
Route::get('/Noticias', [NoticiasController::class, 'index']);
Route::get('/Noticias/{id}', [NoticiasController::class, 'Noticia']);

//Comentarios (solo backend)
Route::post('/Comentar', [MensajesController::class, 'Index'])->name('Comentario');

//Login
Route::controller(AuthController::class)->group(function () {
    Route::get('/Login', 'index')->name('Login');
    Route::post('/Custom-login', 'customLogin')->name('Login.custom');
});

//Registro
Route::controller(AuthController::class)->group(function () {
    Route::get('/Registro', 'registro');
    Route::post('/Custom-registro', 'customRegistro')->name('Registro.custom');
});


//Cerrar sesion (solo con sesion iniciada)
Route::get('/Signout', [AuthController::class, 'signOut'])->name('signout');