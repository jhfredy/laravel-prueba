@if(Session::has('message'))
    

<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Usuario: </strong>
  {{Session::get('message')}}
</div>

@endif