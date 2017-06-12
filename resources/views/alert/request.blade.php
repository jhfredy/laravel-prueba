@if(count($errors)>0)
    <div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">
  </span>&times;</button>
  <ul>
        @foreach($errors->all() as $error)
        <li>{!!$error!!}</li>
        @endforeach
    </ul>
    </div>
    @endif