<div class="form-group">
        {!!Form::label('Nombre:')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
        </div>
            
        <div class="form-group">
        {!!Form::label('Correo:')!!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo de usuario'])!!}
        </div>
        
        <div class="form-group">
        {!!Form::label('Contraseña:')!!}
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la Contraseña de usuario'])!!}
        </div>
        <br>