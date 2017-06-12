$("#registro").click(function() { //obtengo el id de el registro
    var dato = $("#genre").val(); //obtengo el id del dato
    var route = "http://localhost:8000/genero";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'POST',
        dataType: 'json',
        data: { genre: dato },
        success: function(reponse) {
            $("#mensaje-bien").fadeIn();

        },
        error: function(error) {
            var mensaje = error.responseJSON.genre;
            alert(mensaje);


        }
    });

});