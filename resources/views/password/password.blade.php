@extends('layouts.principal')
	@section('content')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">Recuperación contraseña</h3>
		 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
		 <div class="contact-form">
			 {!!Form::open(['url'=>'/password','method'=>'POST'])!!}
				 <div class="col-md-6 contact-left">
				 		
					  {!!Form::text('email',null,['placeholder'=>'ingrese el correo'])!!}
					 
				  </div>
				 {!!Form::submit('ENVIAR CORREO')!!}
			    {!!Form::close()!!}
				 
	     </div>
</div>
	@endsection	