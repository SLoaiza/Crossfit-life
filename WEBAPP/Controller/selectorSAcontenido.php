<?php
	switch ($seccion) {
		case 'inicio':
			echo "string";
		break;
		case 'ingreso':
			include_once('contenido/ingreso.php');
		break;
		case 'registro':
			include_once('contenido/registro.php');
		break;
		// Santiago
		case 'regiemple':
			include_once('contenido/registroempleado.php');
		// Santiago
		break;
		case 'citas':
			# code...
		break;
		case 'usuarios':
			# code...
		break;
		case 'valoracion':
			include_once('contenido/valoraciones.php');
		break;
		case 'roles':
			include_once('contenido/roles.php');
		break;
		case 'planes':
			# code...
		break;
		case 'recursos':
			# code...
		break;
		default:
			# code...
		break;
	}
?>
