<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosHomeController extends Controller
{
    public function __invoke(){
        return view('cursos/listado');
    }
}
