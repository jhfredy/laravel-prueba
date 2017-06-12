@extends('layouts.admin')
@section('content')
@include('alert.request')
    {!!Form::model($movie,['route'=>['pelicula.update',$movie->id],'method'=>'PUT','files'=>true])!!}
    @include('pelicula.forms.peli')
        {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
@endsection