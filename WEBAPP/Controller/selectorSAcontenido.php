<?php
	switch ($seccion) {
		case 'aW5pY2lv':
			//mauro
			include_once('contenido/dashboard.php');
		break;
		// mauro
		case 'aW5ncmVzbw==':
			include_once('contenido/ingreso.php');
		break;

		case 'cmVnaXN0cm8=':
			include_once('contenido/registro.php');
		break;
		// Santiago
		case 'cmVnaWVtcGxl':
			include_once('contenido/registroempleado.php');
		// Santiago
		break;

		case 'Y2l0YXM=':
			include_once('contenido/citas.php');
		break;
		case 'usuarios':
			# code...
		break;
		case 'dmFsb3JhY2lvbg==':
			include_once('contenido/valoraciones.php');
		break;
		case 'cm9sZXM=':
			include_once('contenido/roles.php');
		break;
		case 'cGxhbmVz':
		//mauro
			include_once('contenido/planes.php');
		break;
		// mauro
		case 'cmVnaXJlY3Vy':
			include_once('contenido/registrorecursos.php');
		break;
		case 'QWxsVXNlcnM=':
			include_once('contenido/MostrarUsuarios.php');
		break;
		case 'VerUsuario':
			include_once('contenido/VerUsuario.php');
		break;
		case 'BorrarUsuario':
			include_once('contenido/BorrarUsuario.php');
		break;
		case 'dXN1aW5ncmVzYWRv':
			include_once('contenido/usuingresado.php');
		break;
		default:
			# code...
		break;
	}
?>
