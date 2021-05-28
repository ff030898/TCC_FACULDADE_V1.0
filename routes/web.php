<?php

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
    return view('welcome');
});

Route::get('home',['as'=>'home','uses'=>'HomeController@home']);

Route::get('adm',['as'=>'adm','uses'=>'LoginController@index']);

//Rotas do Painel da Escola
Route::get('adm/escola',['as'=>'adm.escola','uses'=>'EscolaController@index']);
Route::get('adm/escola/adicionar',['as'=>'adm.escola.adicionar','uses'=>'EscolaController@adicionarEscola']);
Route::post('adm/escola/salvar',['as'=>'adm.escola.salvar','uses'=>'EscolaController@salvarEscola']);


Route::get('adm/usuario',['as'=>'adm.usuario','uses'=>'UsuarioController@adicionar']);
Route::post('adm/usuario/salvar',['as'=>'adm.usuario.salvar','uses'=>'UsuarioController@salvar']);

//Rotas do crud de alunos no painel adm escola
Route::get('adm/escola/aluno',['as'=>'adm.escola.aluno','uses'=>'EscolaController@listarAluno']);
Route::get('adm/escola/adicionar/aluno',['as'=>'adm.escola.adicionar.aluno','uses'=>'EscolaController@adicionarAluno']);
Route::post('adm/escola/salvar/aluno',['as'=>'adm.escola.salvar.aluno','uses'=>'EscolaController@salvarAluno']);
Route::get('adm/escola/alterar/aluno/{id}',['as'=>'adm.escola.alterar.aluno','uses'=>'EscolaController@alterarAluno']);
Route::get('adm/escola/excluir/aluno/{id}',['as'=>'adm.escola.excluir.aluno','uses'=>'EscolaController@excluirAluno']);

//Rotas do crud de professores no painel adm escola
Route::get('adm/escola/professor',['as'=>'adm.escola.professor','uses'=>'EscolaController@listarProfessor']);
Route::get('adm/escola/adicionar/professor',['as'=>'adm.escola.adicionar.professor','uses'=>'EscolaController@adicionarProfessor']);
Route::get('adm/escola/salvar/professor',['as'=>'adm.escola.salvar.professor','uses'=>'EscolaController@salvarProfessor']);
Route::get('adm/escola/alterar/professor/{id}',['as'=>'adm.escola.alterar.professor','uses'=>'EscolaController@alterarProfessor']);
Route::get('adm/escola/excluir/professor/{id}',['as'=>'adm.escola.excluir.professor','uses'=>'EscolaController@excluirProfessor']);

//Rotas do crud de materias no painel adm escola
Route::get('adm/escola/materia',['as'=>'adm.escola.materia','uses'=>'EscolaController@listarMateria']);
Route::get('adm/escola/adicionar/materia',['as'=>'adm.escola.adicionar.materia','uses'=>'EscolaController@adicionarMateria']);
Route::post('adm/escola/salvar/materia',['as'=>'adm.escola.salvar.materia','uses'=>'EscolaController@salvarMateria']);
Route::get('adm/escola/alterar/materia/{id}',['as'=>'adm.escola.alterar.materia','uses'=>'EscolaController@alterarMateria']);
Route::get('adm/escola/excluir/materia/{id}',['as'=>'adm.escola.excluir.materia','uses'=>'EscolaController@excluirMateria']);

//Rotas do crud de turmas no painel adm escola
Route::get('adm/escola/turma',['as'=>'adm.escola.turma','uses'=>'EscolaController@listarTurma']);
Route::get('adm/escola/adicionar/turma',['as'=>'adm.escola.adicionar.turma','uses'=>'EscolaController@adicionarTurma']);
Route::get('adm/escola/salvar/turma',['as'=>'adm.escola.salvar.turma','uses'=>'EscolaController@salvarTurma']);
Route::get('adm/escola/alterar/turma/{id}',['as'=>'adm.escola.alterar.turma','uses'=>'EscolaController@alterarTurma']);
Route::get('adm/escola/excluir/turma/{id}',['as'=>'adm.escola.excluir.turma','uses'=>'TurmaController@excluirTurma']);

//Rotas do crud de funcionarios no painel adm escola
Route::get('adm/escola/funcionario',['as'=>'adm.escola.funcionario','uses'=>'EscolaController@listarFuncionario']);
Route::get('adm/escola/adicionar/funcionario',['as'=>'adm.escola.adicionar.funcionario','uses'=>'EscolaController@adicionarFuncionario']);
Route::get('adm/escola/salvar/funcionario',['as'=>'adm.escola.salvar.turma','uses'=>'EscolaController@salvarFuncionario']);
Route::get('adm/escola/alterar/funcionario/{id}',['as'=>'adm.escola.alterar.funcionario','uses'=>'EscolaController@alterarFuncionario']);
Route::get('adm/escola/excluir/funcionario/{id}',['as'=>'adm.escola.excluir.funcionario','uses'=>'TurmaController@excluirFuncionario']);

//Rotas do crud de aulas no painel adm escola
Route::get('adm/escola/aula',['as'=>'adm.escola.aula','uses'=>'EscolaController@listarAula']);
Route::get('adm/escola/adicionar/aula',['as'=>'adm.escola.adicionar.aula','uses'=>'EscolaController@adicionarAula']);
Route::get('adm/escola/salvar/aula',['as'=>'adm.escola.salvar.aula','uses'=>'EscolaController@salvarAula']);
Route::get('adm/escola/alterar/aula/{id}',['as'=>'adm.escola.alterar.aula','uses'=>'EscolaController@alterarAula']);
Route::get('adm/escola/excluir/aula/{id}',['as'=>'adm.escola.excluir.aula','uses'=>'TurmaController@excluirAula']);


Route::get('adm/aluno',['as'=>'adm.aluno','uses'=>'AlunoController@index']);
Route::get('adm/aluno/boletim',['as'=>'adm.aluno.boletim','uses'=>'AlunoController@boletim']);



Route::get('adm/professor',['as'=>'adm.professor','uses'=>'ProfessorController@index']);
Route::get('adm/professor/chamada',['as'=>'adm.professor.chamada','uses'=>'ProfessorController@chamada']);


Route::get('adm/resp',['as'=>'adm.resp','uses'=>'RespController@index']);
Route::get('adm/funcionario',['as'=>'adm.funcionario','uses'=>'FuncionarioController@index']);