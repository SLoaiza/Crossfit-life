<?php 
	$documentoconsulta = $_POST["NdocIngresoUsuJV"];
	try {
	 	$consulta = GestionUsuario::ConsultarIngresado($documentoconsulta);
	 	if ($consulta=="") {
			// echo "<script>
			// 	var aceptar=confirm('No se encontro algun usuario registrado con este numero de documento: ".$documentoconsulta.". Por favor verifiquelo');
			// </script>";
			// echo "<script>
			// 	if (aceptar==true) {
			// 		window.locationf='SuperAdmin.php?S=aW5pY2lv';
			// 	}else{
			// 	}
			// </script>";
			include('contenido/usunoencontrado.php');
		}else{
			include('contenido/datosing.php');
	 	}
	} catch (Exception $e) {
	 	echo $e;
	}
 ?>