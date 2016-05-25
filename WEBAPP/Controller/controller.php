<?php 
	require_once("../Model/conexionbd.php");
	require_once("../Model/gestiones.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
	case 'INGRESAR':
		$ndoc=$_POST["log_doc"];
		$pass=$_POST["log_pass"];
		if($ndoc=="" and $pass==""){
	 		echo "<script>alert('Por favor ingrese datos');</script>";
		}elseif ($ndoc=="" or $pass=="") {
	 		echo "<script>alert('Falta un campo por llenar, Por favor Verifica!');</script>";	
		}else{
	 		try {
	 			$usuario = GestionUsuario::Login($ndoc ,$pass);	
	 			if($usuario[4] == '1'){
	 				header("Location: ../../Website/html/SuperAdmin.php");
	 			}elseif ($usuario[4] == '2') {
	 				echo "hola instructor";
	 			}elseif($usuario[4] == '3'){
	 				echo "hola usuario";
	 			}

	 		} catch (Exception $e) {
	 			echo $e;
			}
		}
	break;
			
	default:
		# code...
		break;
	}
 ?>