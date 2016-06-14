<?php
	switch ($seccion) {
		case 'inicio':
			//mauro
			include_once('contenido/inicio.php');
		break;
		// mauro
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
		//mauro
			include_once('contenido/planes.php');
		break;
		// mauro
		case 'recursos':
			# code...
		break;
		case 'AllUsers':
			include_once('contenido/MostrarUsuarios.php');
		break;
		case 'VerUsuario':
			include_once('contenido/VerUsuario.php');
		break;
		case 'BorrarUsuario':
			include_once('contenido/BorrarUsuario.php');
		break;
		case 'usuingresado':
			include_once('contenido/usuingresado.php');
		break;
		default:
			# code...
		break;
	}
?>
