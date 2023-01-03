<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursosGroupController extends Controller
{

    // Crear curso
    public function create(){
        return view('cursos/create');
    }

    // STORE -creacion-
    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'categoria'=>'required',
        ]);

        $registro = new Course();

        $registro->nombre = $request->nombre;
        $registro->descripcion = $request->descripcion;
        $registro->precio = $request->precio;
        $registro->categoria = $request->categoria;

        $registro->save();

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

        $id->nombre = $request->nombre;
        $id->descripcion = $request->descripcion;
        $id->precio = $request->precio;
        $id->categoria = $request->categoria;

        $id->save();

        return redirect()->route('cursos.show', $id);
    }
}
