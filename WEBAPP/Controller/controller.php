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
	 			if($usuario[0] == '1023'){
	 				header("Location: ../../Website/html/SuperAdmin.php");
	 			}elseif ($usuario[0] == '1111') {
	 				echo "hola instructor";
	 			}elseif($usuario[0] == '2222'){
	 				echo "hola usuario";
	 			}

	 		} catch (Exception $e) {
	 			echo $e;
			}
		}
	break;
	// Santiago
	case 'GuardarEmp':
		$nrod = $_POST["ndoc"];
		$edad = $_POST["edad"];
		$nom = $_POST["nombres"];
		$ape = $_POST["apellidos"];
		$tel = $_POST["telefono"];
		$cel = $_POST["celular"];
		$corr = $_POST["correo"];
		$dire = $_POST["direccion"];
		if($nrod=="" and $edad=="" and $nom=="" and $ape=="" and $tel=="" and $cel=="" and $corr=="" and $dire==""){
			echo "<script>alert('Por favor ingrese datos');</script>";
		}elseif ($nrod=="" or $edad=="" or $nom=="" or $ape=="" or $tel=="" or $cel=="" or $corr=="" or $dire=="") {
			echo "<script>alert('Falta un campo por llenar, Por favor Verifica!');</script>";
		}else{
			try {
				$usuario = GestionUsuario::GuardarEmp($usu_cod, $usu_edad, $usu_nom, $usu_ape, $usu_tel, $usu_cel, $usu_mail, $usu_dir);
				echo "Guardar con exito";
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
