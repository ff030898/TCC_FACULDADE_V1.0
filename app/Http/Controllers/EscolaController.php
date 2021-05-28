<?php

namespace App\Http\Controllers;

use App\Escola;
use App\Aluno;
use App\Professor;
use App\Materia;
use App\Turma;
use App\Funcionario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EscolaController extends Controller
{
    public function index()
    {
        return view('admin.escola.index');
    }

    public function adicionarEscola()
    {

        return view('admin.escola.crud-escola.add-escola');
       
    }

    public function salvarEscola(Request $reqEscola)
    {
    
        $dadosEscola = $reqEscola->all();

       
        if($reqEscola->hasFile('img_escola')){
          $imagem = $reqEscola->file('img_escola');
          $num = rand(1111,9999);
          $dir = "img/escolas/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "imagem_".$num.".".$ex;
          $imagem->move($dir,$nomeImagem);
          $dadosEscola['img_escola'] = $dir."/".$nomeImagem;
        }
  
        Escola::create($dadosEscola);
  
        return redirect()->route('adm');
  

    }

    

    //Controllers Aluno

    public function listarAluno()
    {

        $registros = Aluno::where('fk_cd_escolaA',1)->get();
 
        return view('admin.escola.crud-aluno.listar-aluno',compact('registros'));
      
    }

    public function adicionarAluno()
    {

        return view('admin.escola.crud-aluno.add-aluno');
      
    }

    public function salvarAluno(Request $req)
    {
      $dados = $req->all();

      if($req->hasFile('img_aluno')){
        $imagem = $req->file('img_aluno');
        $num = rand(1111,9999);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['img_aluno'] = $dir."/".$nomeImagem;
      }

      Aluno::create($dados);

      return redirect()->route('admin.escola.crud-aluno.listar-aluno');

    }
    public function alterarAluno($id)
    {

        return view('admin.escola.crud-aluno.alterar-aluno');
      
    }

    public function excluirAluno($id)
    {

        return ($id);
      
    }




    //Controllers Professor

    public function listarProfessor()
    {
        $registrosP = Professor::where('fk_cd_escolaP',1)->get();
        return view('admin.escola.crud-professor.listar-professor',compact('registrosP'));
      
    }

    public function adicionarProfessor()
    {

        return view('admin.escola.crud-professor.add-professor');
      
    }

    public function salvarProfessor(Request $req)
    {
    
        $dados = $req->all();

       
        if($req->hasFile('img_prof')){
          $imagem = $req->file('img_prof');
          $num = rand(1111,9999);
          $dir = "img/professores/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "imagem_".$num.".".$ex;
          $imagem->move($dir,$nomeImagem);
          $dados['img_professor'] = $dir."/".$nomeImagem;
        }
  
        Professor::create($dados);
  
        return redirect()->route('adm.escola.professor');

    }

    public function alterarProfessor($id)
    {

        return view('admin.escola.crud-professor.alterar-professor');
      
    }

    public function excluirProfessor($id)
    {

        return ($id);
      
    }

    //Controllers Materia

    public function listarMateria()
    {
        $registrosM = Materia::all();
        
        return view('admin.escola.crud-materia.listar-materia',compact('registrosM'));
      
    }

    public function adicionarMateria()
    {

        return view('admin.escola.crud-materia.add-materia');
      
    }

    public function salvarMateria(Request $resq)

    {

        $dados = $req->all();

       
        Materia::create($dados);

        $registrosM = Materia::all();
        
        return redirect()->route('adm.escola.materia');
    }


    public function alterarMateria($id)
    {

        return view('admin.escola.crud-materia.alterar-materia');
      
    }

    public function excluirMateria($id)
    {

        return ($id);
      
    }

    //Controllers Turma

    public function listarTurma()
    {

        $registrosT = Turma::all();
      
        return view('admin.escola.crud-turma.listar-turma',compact('registrosT'));
      
    }

    public function adicionarTurma()
    {

        return view('admin.escola.crud-turma.add-turma');
      
    }

    public function salvarTurma()
    {

        //return view('admin.escola.crud-aluno.add-aluno');
      
    }
    public function alterarTurma($id)
    {

        return view('admin.escola.crud-turma.alterar-turma');
      
    }

    public function excluirTurma($id)
    {

        return ($id);
      
    }

     //Controllers Funcionario

     public function listarFuncionario()
     {

         $registrosF = Funcionario::where('fk_cod_escolaF',1)->get();
         return view('admin.escola.crud-funcionario.listar-funcionario',compact('registrosF'));
       
     }
 
     public function adicionarFuncionario()
     {
 
         return view('admin.escola.crud-funcionario.add-funcionario');
       
     }
 
     public function salvarFuncionario()
     {
 
         //return view('admin.escola.crud-aluno.add-aluno');
       
     }
     public function alterarFuncionario($id)
     {
 
         return view('admin.escola.crud-funcionario.alterar-funcionario');
       
     }
 
     public function excluirFuncionario($id)
     {
 
         return ($id);
       
     }

     //Controllers Aula

     public function listarAula()
     {
 
         return view('admin.escola.crud-aula.listar-aula');
       
     }
 
     public function adicionarAula()
     {
 
         return view('admin.escola.crud-aula.add-aula');
       
     }
 
     public function salvarAula()
     {
 
         //return view('admin.escola.crud-aluno.add-aluno');
       
     }
     public function alterarAula($id)
     {
 
         return view('admin.escola.crud-aula.alterar-aula');
       
     }
 
     public function excluirAula($id)
     {
 
         return ($id);
       
     }
}
