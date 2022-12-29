<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursosHomeController extends Controller
{
    public function __invoke(){
        $registros = Course::all();
        return view('cursos/listado', compact('registros'));
    }
}
