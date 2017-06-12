 <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operaciones</th>
        </thead>
        @foreach($datos as $dato)
        <tbody>
            <td>{{$dato->name}}</td>
            <td>{{$dato->email}}</td>
            <td>{!!link_to_route('usuario.edit', $title = 'Editar',$parameters= $dato->id, $attributes = ['class'=>'btn btn-primary']);!!}
            </td>
        </tbody>
        @endforeach
    </table>
    {!!$datos->render()!!}