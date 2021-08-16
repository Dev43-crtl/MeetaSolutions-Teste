<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastrarUsuarioController extends Controller
{
    public function cadastrarUsuario() {

        return view('app.usuarios.cadastro-usuario');
    }

    public function adicionar(Request $request){

        $msg= '';

        if($request->input('_token') != '' && $request->input('id') == '') {
            $regra = [
                'username' => 'required|min:3|max:20',
                'password' => 'required|min:8',
                'name' => 'required|min:3|max:20'
            ];

            $feedback = [
                'required' => "O campo deve ser preenchido",
                'username.min' => 'O campo name deve ter no minimo 3 caracteres',
                'username.max' => 'O campo name deve ter no máximo 20 caracteres',
                'name.min' => 'O campo name deve ter no minimo 3 caracteres',
                'name.max' => 'O campo name deve ter no máximo 20 caracteres',
                'password.min' => 'O campo password deve ter no minimo 8 caracteres'
            ];

            
            //inclusao
            if($request->validate($regra, $feedback)){
                if(Usuario::where('name', $request->name )->exists()){
                    $msg = 'Esse nome ja existe';
                }else if(Usuario::where('username', $request->username )->exists()){
                    $msg = 'Esse username ja existe';
                }else{
                    $usuario = Usuario::create($request->all());
                    $msg = 'Cadastro realizado com sucesso';
                    return view('app.usuarios.cadastro-usuario', ['msg' => $msg, 'usuario' => $usuario]);
                }
                
            }else {
                $msg = 'Erro ao cadastrar';
            }
        }   

            //edicao

            if($request->input('_token') != '' && $request->input('id') != '') {
                $usuario = Usuario::find($request->input('id'));
                $update = $usuario->update($request->all());
    
                if($update) {
                    $msg = 'Atualização realizada com sucesso';
                } else {
                    $msg = 'Erro ao tentar atualizar o registro';
                }
                return view('app.usuarios.cadastro-usuario', ['id' => $request->input('id'), 'msg' => $msg]);
            }

            return view('app.usuarios.cadastro-usuario', ['msg' => $msg]);
    }
}
