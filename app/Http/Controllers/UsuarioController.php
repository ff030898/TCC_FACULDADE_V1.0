<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

    public function adicionar()
    {
      return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $req)
    {

      $dados = $req->all();

      if($req->hasFile('imagem_usuario')){
        $imagem = $req->file('imagem_usuario');
        $num = rand(1111,9999);
        $dir = "img/usuarios/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem_usuario'] = $dir."/".$nomeImagem;
      }

      //$dados['nm_usuario'] = "João";

      Usuario::create($dados);

      return redirect()->route('adm');

    }

}
