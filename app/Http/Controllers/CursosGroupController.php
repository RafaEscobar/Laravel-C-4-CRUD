<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosGroupController extends Controller
{
    // Mostar 1 curso
    public function show($id){
        return view('cursos/show', compact('id'));
    }

    // Crear curso
    public function create(){
        return view('cursos/create');
    }

    // Actualizar un curso
    public function update($curso){
        return view('cursos/update', compact('curso'));
    }
}
