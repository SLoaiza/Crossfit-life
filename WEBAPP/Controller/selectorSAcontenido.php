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
<<<<<<< HEAD
=======
		// Santiago
		case 'regiemple':
			include_once('contenido/registroempleado.php');
		// Santiago
		break;
>>>>>>> origin/master
		case 'citas':
			include_once('contenido/citas.php');
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
