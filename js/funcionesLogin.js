function login()
{
    var elUsuario= $("#dni").val();
    var elsexo= $("#sexo").val();

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
            window.location.href = "menu.php";            // vamos al menu
        }
        else
        {
            alert("error");
            $("#MensajeError").val("NO esta registrado... ");
        }
    });
}
