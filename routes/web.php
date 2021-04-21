<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;
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
Route::get('/', function () {
    return view("Inicio");
});

Route::prefix('Crud')->group(function () {
    Route::get('/Inicio',[UsuariosController::class,'Inicio']);
    Route::get('/UsuarioNuevo', [UsuariosController::class, 'UsuarioNuevo']);
    Route::get('/MostrarUsuarios',[UsuariosController::class,'mostrarUsuarios']);
    Route::get('/Perfil/{idUsuario}',[UsuariosController::class,'PerfilUsuario'])->name('usuario.perfil');
    Route::post('/UsuarioNuevo', [UsuariosController::class, 'CrearUsuario'])->name('UsuarioNuevo.CrearUsuario');
    Route::post('/EditarDatos',[UsuariosController::class,'EditarDatos'])->name('EditarDatos.EditarDatos');
});
