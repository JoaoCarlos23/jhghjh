<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;


class HomeController extends Controller
{
   
    public function index()
    {

        $cursos = Curso::paginate(3); //paginação pro front, obrigatorio
        //so vai retornar 3 produtos la no home, nao vai passar disso
        return view('home',compact('cursos'));

    }




}