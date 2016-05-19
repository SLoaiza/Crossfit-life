<?php 
	require_once("../modelo/conexionbd.php");
	require_once("../modelo/gestiones.php");
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
	 			if($usuario[0] == '212'){
	 				echo "hola";
	 			}else{
	 				echo "Chao";
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