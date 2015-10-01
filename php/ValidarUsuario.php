<?php 
session_start();
require_once("../clases/usuario.php");
require_once("../clases/AccesoDatos.php");

$DatosLogin = json_decode(json_encode($_POST));

$usuarioValidado = usuario::InsertarUsuario($DatosLogin->usuario, $DatosLogin->sexo);

if(isset($usuarioValidado))
{
	$_SESSION['usuarioActual'] = $usuarioValidado->dni;
	echo "correcto";

}else
{
	echo "no esta en la base de datos";
}

?>