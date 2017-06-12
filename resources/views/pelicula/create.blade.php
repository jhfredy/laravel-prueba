@extends('layouts.admin')
@section('content')

    {!!Form::open(['route'=>'pelicula.store','method'=>'POST','files'=>true])!!}

    @include('pelicula.forms.peli')

    {!!Form::submit('Registar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection
