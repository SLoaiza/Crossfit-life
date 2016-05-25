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
		case 'citas':
			include_once('contenido/citas.php');
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