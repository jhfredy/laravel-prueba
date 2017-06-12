@extends('layouts.admin')
@section('content')
    @include('alert.request')
    
    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Registar',['class'=>'btn btn-primary'])!!}
        
    {!!Form::close()!!}
    
@stop