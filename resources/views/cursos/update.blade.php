@extends('layouts.plantillaPrincipal')

@section('title', 'Actualizar curso')
    
@section('content')

<div class="container">
        <h1>Actualizar curso: {{$id->nombre}} </h1>
        <form action="{{route('cursos.upgrade', $id)}}" method="POST">

            @csrf
            @method('put')

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombe: </label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$id->nombre}}">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="descripcion" style="height: 100px" name="descripcion">{{$id->descripcion}}</textarea>
                <label for="descripcion">Descripción: </label>
              </div>
              <div class="mb-3">
                <label for="precio" class="form-label">Precio: </label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{$id->precio}}">
              </div>
              <select class="form-select" aria-label="Default select example" name="categoria" >
                <option selected>Elige la categoria: </option>
                <option <?php {{if($id->categoria == 'Desarrollo Web'){echo("selected");}}} ?> value="Desarrollo Web">Desarrollo Web</option>
                <option <?php if($id->categoria == 'Front End'){echo("selected");} ?>  value="Front End">Front End</option>
                <option <?php if($id->categoria == 'Diseño UX'){echo("selected");} ?>  value="Diseño UX">Diseño UX</option>
                <option <?php if($id->categoria == 'Apps Moviles'){echo("selected");} ?>  value="Apps Moviles">Apps Moviles</option>
              </select>
            <button type="submit" class="btn btn-primary mt-4">Crear registro</button>
        </form>
    </div>
@endsection