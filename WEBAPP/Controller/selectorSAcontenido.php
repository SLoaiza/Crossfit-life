<?php
	switch ($seccion) {
		case 'inicio':
			//mauro
			include_once('contenido/inicio.php');

		break;
		case 'ingreso':
			include_once('contenido/ingreso.php');
		break;
		case 'registro':
			include_once('contenido/registro.php');
		break;
		case 'enmora':
			# code...
		break;
		case 'citas':
			# code...
		break;
		case 'usuarios':
			# code...
		break;
		case 'valoracion':
			# code...
		break;
		case 'roles':
			# code...
		break;
		case 'planes':
		//mauro
			include_once('contenido/registro.php');
		break;
		case 'recursos':
			# code...
		break;
		default:
			# code...
		break;
	}
?>
