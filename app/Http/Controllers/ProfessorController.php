<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index(){
        return view ('admin.professor.index');
    }

    public function chamada(){
        return view ('admin.professor.chamada');
    }
}
