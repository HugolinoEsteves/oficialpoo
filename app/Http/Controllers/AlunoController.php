<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    //
    public function index(){
        $alunos = Aluno::all();
        return view ('alunos', compact ('alunos'));
}
}