@extends('layouts.admin')
@section('content')
@include('alert.succes')
@include('alert.request')
<div class="movies">
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Direccion</th>
            <th>Caratula</th>
            <th>Operaciones</th>
        </thead>
        @foreach($movies as $movie)
        <tbody>
            <td>{{$movie->name}}</td>
            <td>{{$movie->genre}}</td>
            <td>{{$movie->direction}}</td>
            <td>
                <img src="movies/{{$movie->path}}" alt="" style="100px">
            </td>
            <td></td>
            
        </tbody>
        @endforeach
        </table>
@endsection