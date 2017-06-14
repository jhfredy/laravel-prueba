@extends('layouts.principal')
	@section('content')
	@include('alert.succes')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
			<div class="clearfix"></div>
			</div>

			<div class="main-contact">
				 <h3 class="head">CONTACT</h3>
				 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
				 <div class="contact-form">
                 <h1>Resetear el password</h1>
         @if (count($errors) > 0)
        <div class="alert alert-danger">
        Los datos introducidos en el formulario son incorrectos.
        </div>
        @endif
					<form method="POST" action="{{url('password/reset')}}">
  {{csrf_field()}}
  <input type="hidden" name="token" value="{{$token}}" />

  <div class="form-group">
   <label for="email">Email:</label>
   <input type="email" class="form-control" name="email" value="" />
   <div class="text-danger">{{$errors->first('email')}}</div>
  </div>

  <div class="form-group">
   <label for="password">Password:</label>
   <input type="password" class="form-control" name="password" />
   <div class="text-danger">{{$errors->first('password')}}</div>
  </div>

  <div class="form-group">
   <label for="password_confirmation">Confirmar Password:</label>
   <input type="password" class="form-control" name="password_confirmation" />
  </div>
  <button type="submit" class="btn btn-primary">Resetear Password</button>
 </form>
				</div>
			</div>
		</div>
	@endsection