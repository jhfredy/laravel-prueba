@extends('layouts.admin')
@section('content')
@include('alert.request')
    {!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
        <br>
    {!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@stop

