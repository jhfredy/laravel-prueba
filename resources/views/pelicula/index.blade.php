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
                <img src="movies/{{$movie->path}}" alt="" style="width:100px;">
            </td>
            <td>{!!link_to_route('pelicula.edit', $title = 'Editar',$parameters= $movie->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
            <td>{!!Form::open(['route'=>['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}</td>
            
            
        </tbody>
        @endforeach
        </table>
@endsection