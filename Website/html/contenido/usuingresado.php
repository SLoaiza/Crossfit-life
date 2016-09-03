<?php 
	$documentoconsulta = $_POST["NdocIngresoUsuJV"];
	try {
	 	$consulta = GestionUsuario::ConsultarIngresado($documentoconsulta);
	 	if ($consulta=="") {
			include('contenido/usunoencontrado.php');
		}else{
			include('contenido/datosing.php');
	 	}
	} catch (Exception $e) {
	 	echo $e;
	}
 ?>