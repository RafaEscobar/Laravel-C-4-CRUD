<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourse;
use App\Models\Course;
use Illuminate\Http\Request;


class CursosGroupController extends Controller
{

    // Crear curso
    public function create(){
        return view('cursos/create');
    }

    // STORE -creacion-
    public function store(StoreCourse $request){

        $registro = Course::create($request->all());

        return redirect()->route('cursos.show', $registro);
    }

    // Actualizar un curso
    public function update(Course $id){
        return view('cursos/update', compact('id'));
    }
    
    // Mostar 1 curso
    public function show($id){
        //* $id = Es lo que mandamos desde la ruta
        //* $entidad = Es el registro obtenido en base al ID, (ID y ENTIDAD >> SON DIFERENTES)
        $entidad = Course::find($id);
        return view('cursos/show', compact('entidad'));
    }

    public function upgrade(Request $request, Course $id){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'categoria'=>'required',
        ]);

        $id->update($request->all());

        return redirect()->route('cursos.show', $id);
    }

    public function destroy(Course $id){
        $id->delete();
        return redirect()->route('cursos');
    }
}
