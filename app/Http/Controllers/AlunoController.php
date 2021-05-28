<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function index(){
        return view ('admin.aluno.index');
    }

    public function boletim(){
        $registros = Aluno::all();
        return view ('admin.aluno.boletim',compact('registros'));
    }
}
