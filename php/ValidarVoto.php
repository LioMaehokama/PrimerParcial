<?php 
session_start();
require_once("../clases/usuario.php");
require_once("../clases/AccesoDatos.php");

$Datos = json_decode(json_encode($_POST));

$VotoValidado = usuario::ModificarUsuario($Datos->dni, $Datos->voto, $Datos->provincia, $Datos->localidad);

if(isset($VotoValidado))
{
	echo "correcto";
}else
{
	echo "no esta en la base de datos";
}

?>