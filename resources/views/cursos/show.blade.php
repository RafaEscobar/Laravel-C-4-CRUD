@extends('layouts.plantillaPrincipal')

@section('title', 'Curso  ' . $entidad->nombre )

@section('content')
    <div class="container">
        <h1>Mi curso de: {{$entidad->nombre}} </h1>
        <h2>Datos relevantes: </h2>
        <ul class="list-group">
            <li class="list-group-item">{{$entidad->categoria}}</li>
            <li class="list-group-item">{{$entidad->precio}}</li>
            <li class="list-group-item">{{$entidad->descripcion}}</li>
        </ul>
        <a class="btn btn-primary mt-4" href="{{route('cursos')}}" role="button">Regresa a lista de cursos</a>
    </div>
@endsection