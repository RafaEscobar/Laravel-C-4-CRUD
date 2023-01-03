@extends('layouts.plantillaPrincipal')

@section('title', 'Crear nuevo curso')

@section('content')
    <div class="container">
        <h1>Crea un nuevo curso: </h1>
        <form action="{{route('cursos.store')}}" method="POST">

            @csrf

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombe: </label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
              @error('nombre') 
                  <small>{{$message}}</small>
                  <br>
              @enderror
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="descripcion" style="height: 100px" name="descripcion">{{old('descripcion')}}</textarea>
                <label for="descripcion">Descripción: </label>
                @error('descripcion')
                    <small>{{$message}}</small>
                    <br>
                    <br>
                @enderror
              </div>
              <div class="mb-3">
                <label for="precio" class="form-label">Precio: </label>
                <input type="number" class="form-control" id="precio" name="precio"  value="{{old('precio')}}">
                @error('precio')
                    <small>{{$message}}</small>
                    <br>
                    <br>
                @enderror
              </div>
              <select class="form-select" aria-label="Default select example" name="categoria" >
                <option value="">Elige la categoria: </option>
                <option <?php {{if(old('categoria')==='Desarrollo Web'){echo("selected");}}} ?>  value="Desarrollo Web">Desarrollo Web</option>
                <option <?php {{if(old('categoria')==='Front End'){echo("selected");}}} ?> value="Front End">Front End</option>
                <option <?php {{if(old('categoria')==='Diseño UX'){echo("selected");}}} ?> value="Diseño UX">Diseño UX</option>
                <option <?php {{if(old('categoria')==='Apps Moviles'){echo("selected");}}} ?>  value="Apps Moviles">Apps Moviles</option>
              </select>
              @error('categoria')
                  <small>{{$message}}</small>
                  <br>
              @enderror
            <button type="submit" class="btn btn-primary mt-4">Crear registro</button>
        </form>
    </div>
@endsection