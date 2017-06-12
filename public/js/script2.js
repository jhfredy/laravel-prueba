$(document).ready(function() {
    carga();
});

function carga() {
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/generos";
    $("#datos").empty();
    $.get(route, function(res) {
        $(res).each(function(key, value) //llave para mapear todos los generos
            {
                tablaDatos.append("<tr><td>" + value.genre + "</td><td><button value=" + value.id + " OnClick='mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>editar</button><button  value=" + value.id + " OnClick='eliminar(this);' class='btn btn-danger'>eliminar</button></td></tr>")
            });
    });
}

function mostrar(btn) {
    var id = btn.value;
    var route = "http://localhost:8000/genero/" + id + "/edit";

    $.get(route, function(res) {
        //obtenemos la ruta  de genre en donde se encuentra en este caso genero.blade.php
        //tambien obtenemos el id de modal.blade.php
        $("#genre").val(res.genre);
        $("#id").val(res.id);

    });
}

function eliminar(btn) {
    var route = "http://localhost:8000/genero/" + btn.value + "";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'DELETE',
        dataType: 'json',
        success: function() {
            carga();
            $("#mensaje-borrar").fadeIn();
        }
    });
}
//captura el id del boton actualizar de modal.php
$("#actualizar").click(function() {
    var valor = $("#id").val();
    var dato = $("#genre").val();
    var route = "http://localhost:8000/genero/" + valor + "";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'PUT',
        dataType: 'json',
        data: { genre: dato },
        success: function() {
            carga();
            $("#myModal").modal('toggle');
            $("#mensaje-bien").fadeIn();
        }
    });
});