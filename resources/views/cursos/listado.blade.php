@extends('layouts.plantillaPrincipal')

@section('title', 'Listado de cursos')


@section('content')

<div class="container">
        <h1 class="pb-4">Lista de todos los cursos: </h1>
        <a class="btn btn-dark" href="{{route('cursos.create')}}" role="button">Crear nuevo registro</a>
        <div class="table-responsive pt-4">
            <table class="table table-bordered border-primary table-dark table-striped-columns">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Mostrar</th>
                    <th scope="col">Editar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $fila)
                        <tr>
                          <th>{{$fila->nombre}}</th>
                          <td>{{$fila->descripcion}}</td>
                          <td>{{$fila->precio}}</td>
                          <td>{{$fila->categoria}}</td>
                          <td><a class="btn btn-primary" href="{{route('cursos.show', $fila->id)}}" role="button">Mostrar</a></td>
                          <td><a class="btn btn-primary" href="{{route('cursos.update', $fila->id)}}" role="button">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

@endsection