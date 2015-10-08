function login()
{
    var elUsuario = $("#dni").val();
    var elsexo = $("#sexo").val();

    var funcionAjax = $.ajax({url:"php/ValidarUsuario.php", type:"post",
                        data:{
                        usuario:elUsuario,
                        sexo:elsexo,
                        }});

    funcionAjax.done(function(respuesta){
        console.log(respuesta);
        if(respuesta == "correcto")
        {
            alert("sesion iniciada");
            $("#MensajeError").val("");
            //window.location.href = "menu.php";            // vamos al menu
        }
        else
        {
            alert("error");
            $("#MensajeError").val("NO esta registrado... ");
        }
    });
}


function voto()
{
    var elvoto = $("#presidenciable").val();
    var laprovincia = $("#provincia").val();
    var lalocalidad = $("#localidad").val();

    var funcionAjax = $.ajax({url:"php/ValidarVoto.php", type:"post",
                        data:{
                        voto:elUsuario,
                        provincia:laprovincia,
                        localidad:lalocalidad,
                        }});

    funcionAjax.done(function(respuesta){
        console.log(respuesta);
        if(respuesta == "correcto")
        {
            alert("voto registrado");
            $("#MensajeError").val("");
            //window.location.href = "menu.php";            // vamos al menu
        }
        else
        {
            alert("error");
            $("#MensajeError").val("NO esta registrado... ");
        }
    });
}

