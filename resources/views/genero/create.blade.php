@extends('layouts.admin')
@section('content')
{!!Form::open()!!}

    

<div style="display:none" id="mensaje-bien" class="alert alert-success alert-dismissable" role="alert">
  <strong>Genero creado</strong>
  </div>

<input type="hidden" name="token" value="{{csrf_token()}}" id="token">
    @include('genero.forms.genero');
    {!!link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'
    ],$secure=null)!!}
{!!Form::close()!!}

@endsection
