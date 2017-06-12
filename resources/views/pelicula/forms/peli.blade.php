        <div class="form-group">
        {!!Form::label('Nombre:')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la pelicula'])!!}
        </div>
            
        <div class="form-group">
        {!!Form::label('Elenco')!!}
        {!!Form::text('cast',null,['class'=>'form-control','placeholder'=>'Ingresa el elenco'])!!}
        </div>
        
        <div class="form-group">
        {!!Form::label('Dirección')!!}
        {!!Form::text('direction',null,['class'=>'form-control','placeholder'=>'Ingresa la dirección'])!!}
        </div>
        <div class="form-group">
        {!!Form::label('Duración')!!}
        {!!Form::text('duration',null,['class'=>'form-control','placeholder'=>'ingresa la duración'])!!}
        </div>
        <div class="form-group">
        {!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
        </div>
        <div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genres_id',$genres)!!}
        </div>