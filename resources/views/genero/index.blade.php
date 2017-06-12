@extends('layouts.admin')
@section('content')
@include('genero.modal')
<div style="display:none" id="mensaje-bien" class="alert alert-success alert-dismissable" role="alert">
  <strong>Genero Actualizado</strong>
  </div>
  <div style="display:none" id="mensaje-borrar" class="alert alert-danger alert-dismissable" role="alert">
  <strong>Genero eliminado</strong>
  </div>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Operaciones</th>
        </thead>
        <tbody id="datos"></tbody>
    </table>
   
@endsection
 @section('scripts')
    {!!Html::script('js/script2.js')!!}
    @show