@extends('layouts.plantillaPrincipal')

@section('title', 'Inicio')

@section('content')
    <h1>Pantalla principal</h1>
    <button><a href="{{route('cursos')}}">Ir a lista de cursos...</a></button>
@endsection