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
	 			if($usuario[2] == '1'){
	 				header("Location: ../../Website/html/SuperAdmin.php");
	 			}elseif ($usuario[2] == '2') {
	 				echo "hola Admin";
	 			}elseif($usuario[2] == '3'){
	 				echo "hola instructor";
	 			}elseif($usuario[2] == '4'){
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
	case'RegistrarUsuario':
		$cedula=$_POST["NdocUsujv"];
		$rol=$_POST["rolUsujv"];
		$edad=$_POST["edadUsujv"];
		$nombres=$_POST["NombresUsujv"];
		$apellidos=$_POST["ApellidosUsujv"];
		$telefono=$_POST["telefonoUsujv"];
		$celular=$_POST["celularUsujv"];
		$correo=$_POST["correoUsujv"];
		$dir=$_POST["direccionUsujv"];
		$pass=$_POST["passwordUsujv"];
		$confirmpass=$_POST["confirmpasswordUsujv"];
		$estado=$_POST["EstadoUsujv"];
		$fecharegistro=date("Y-m-d");
		// $codigo_plan=$_POST["planUsujv"];
		$inicio=$_POST["FInicioPlanUsujv"];
		$fin=$_POST["FFinPlanUsujv"];

		if ($cedula=="" or $rol=="" or $edad=="" or $nombres=="" or $apellidos=="" or
		$telefono=="" or $celular=="" or $correo=="" or $dir=="" or $pass=="" or
		$confirmpass=="" or $estado=="" ) {
			echo "<script>alert('Faltan Campos Por Rellenar');</script>";
		}else{
			try {
				$usuario = GestionUsuario::GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$inicio,$fin);
				echo "Guardar con exito";
 		 		} catch (Exception $e) {
 		 		echo $e;
 		 		}
			}
		// echo $fecharegistro;
		break;
	}
 ?>
