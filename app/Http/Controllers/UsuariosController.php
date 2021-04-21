<?php

namespace App\Http\Controllers;

use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function UsuarioNuevo(){
        return view("UsuarioNuevo");
    }
    public function Inicio(){
        return view("Inicio");
    }

    public function CrearUsuario(Request $datos){
        $usuario = new UsuariosModel();
        $usuario->nombre=$datos->nombre;
        $usuario->Matricula=$datos->matricula;
        $usuario->apellidoPaterno=$datos->apellidopaterno;
        $usuario->apellidoMaterno=$datos->apellidomaterno;
        $usuario->Correo=$datos->email;
        $usuario->Contraseña=$datos->password;
        $usuario->save();

    }

    public function mostrarUsuarios(){
        $usuario = UsuariosModel::all();
        return view("MostrarUsuarios",["usuario"=>$usuario]);
    }

    public function PerfilUsuario($idUsuario){
        $usuario = UsuariosModel::find($idUsuario);
        return view('Perfil',["usuario"=>$usuario]);
    }

    public function EditarDatos(Request $datos){
        $usuario = UsuariosModel::find($datos->idUsuario);
        $usuario->nombre=$datos->nombre;
        $usuario->Matricula=$datos->matricula;
        $usuario->apellidoPaterno=$datos->apellidopaterno;
        $usuario->apellidoMaterno=$datos->apellidomaterno;
        $usuario->Correo=$datos->email;
        $usuario->Contraseña=$datos->password;
        $usuario->save();

    }
}
