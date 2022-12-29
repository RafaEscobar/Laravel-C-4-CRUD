@extends('layouts.plantillaPrincipal')

@section('title', 'Crear nuevo curso')

@section('content')
    <div class="container">
        <h1>Crea un nuevo curso: </h1>
        <form action="{{route('cursos.store')}}" method="POST">

            @csrf

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombe: </label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="descripcion" style="height: 100px" name="descripcion"></textarea>
                <label for="descripcion">Descripción: </label>
              </div>
              <div class="mb-3">
                <label for="precio" class="form-label">Precio: </label>
                <input type="number" class="form-control" id="precio" name="precio">
              </div>
              <select class="form-select" aria-label="Default select example" name="categoria">
                <option selected>Elige la categoria: </option>
                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Front End">Front End</option>
                <option value="Diseño UX">Diseño UX</option>
                <option value="Apps Moviles">Apps Moviles</option>
              </select>
            <button type="submit" class="btn btn-primary mt-4">Crear registro</button>
        </form>
    </div>
@endsection