<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;

class ListaUsuarioController extends Controller
{
    public function listaUsuarios() {

        $usuarios = DB::table('usuarios')->where('deleted_at',null)->paginate(10);

        return view('app.usuarios.lista-usuarios', ['usuarios'=> $usuarios]);
    }

    public function softDelete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('app.usuarios.lista');
    }

    public function editar($id){
        $usuario = Usuario::find($id);

        return view('app.usuarios.cadastro-usuario', ['usuario' => $usuario]);
    }

    
}
