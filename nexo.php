<?php 
require_once("clases/AccesoDatos.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'MostarLogin':
			include("partes/FormIngreso.php");
		break;
	case 'MostrarVotacion':
			include("partes/FormVotacion.php");
		break;
	case 'MostrarListado':
			include("partes/FormListado.php");
		break;
	case 'VerEnMapa':
			include("partes/formMapaGoogle.php");
		break;

	default:
		# code...
		break;
}

?>