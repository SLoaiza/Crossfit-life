<?php
	date_default_timezone_set('America/Bogota');
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
	 				header("Location: ../../Website/html/SuperAdmin.php?seccion=inicio");
	 			}elseif ($usuario[2] == '2') {
	 				echo "hola Admin";
	 			}elseif($usuario[2] == '3'){
	 				echo "hola instructor";
	 			}elseif($usuario[2] == '4'){
	 				echo "hola usuario";
	 			}else{
	 				header("Location: ../../Website/html/index.php");
	 			}

	 		} catch (Exception $e) {
	 			echo $e;
			}
		}
	break;
	// Santiago
	case 'GuardarEmp':
		$nrod = $_POST["nrodoc"];
		$edad = $_POST["edad"];
		$nom = $_POST["nombres"];
		$ape = $_POST["apellido"];
		$tel = $_POST["tel"];
		$cel = $_POST["cel"];
		$corr = $_POST["mail"];
		$dire = $_POST["dir"];
		$rol = $_POST["rolusu"];
		
		if($nrod=="" and $edad=="" and $nom=="" and $ape=="" and $tel=="" and $cel=="" and $corr=="" and $dire=="" and $rol==""){
			echo "<script>alert('Por favor ingrese datos');</script>";
		}elseif ($nrod=="" or $edad=="" or $nom=="" or $ape=="" or $rol=="") {
			echo "<script>alert('Falta un campo por llenar, Por favor Verifica!');</script>";
		}else{
			try {
				$usuario = GestionUsuario::GuardarEmp($nrod, $edad, $nom, $ape, $tel, $cel, $corr, $dire, $rol);
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
		if ($telefono=="") {
		 	$telefono="NaN";
		}
		$celular=$_POST["celularUsujv"];
		if ($celular=="") {
		 	$celular="NaN";
		}
		$correo=$_POST["correoUsujv"];
		if ($correo=="") {
		 	$correo="NaN";
		}
		$dir=$_POST["direccionUsujv"];
		if ($dir=="") {
		 	$dir="NaN";
		}
		$pass=$_POST["passwordUsujv"];
		$confirmpass=$_POST["confirmpasswordUsujv"];
		$estado=$_POST["EstadoUsujv"];
		$fecharegistro=date("Y-m-d");
		$codigo_plan=$_POST["tipoplanUsujv"];
		// 	if (isset($codigo_plan)) {
		// 		$codigo_plan
		// 	}
		//  	if ($codigo_plan=="0") {
		//  		$codigo_plan="NaN";
		// }
		// error
		$inicio=$_POST["FInicioPlanUsujv"];
	    if ($inicio=="") {
		 	$inicio="NaN";
		}
		 $fin=$_POST["FFinPlanUsujv"];
		 if ($fin=="") {
		 	$fin="NaN";
		}
	    try {
		   	$usuario = GestionUsuario::GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$codigo_plan,$inicio,$fin);
		} catch (Exception $e){
		    	    echo $e;
	    }
		header("Location:../../Website/html/SuperAdmin.php?seccion=registro");
	break;
	case 'ConsultarIngresado':
		$documentoconsulta = $_POST["NdocIngresoUsuJV"];
		try {
			$consulta = GestionUsuario::ConsultarIngresado($documentoconsulta);
			$document = $consulta[0];
		    $nombre = $consulta[4];
		    
			// header("Location:../../Website/html/SuperAdmin.php?seccion=ingreso");
			echo "<script>alert('".$document." ".$nombre."');</script>";
		} catch (Exception $e) {
			echo $e;
		}
		//echo $documentoconsulta;
	break;
	case 'IngresoUsuarioCasual':

		$documentoinv =$_POST["jvInvndoc"];
		$nombreinv=$_POST["jvInvnom"];
		$apellidoinv=$_POST["jvInvape"];
		$telefonoinv=$_POST["jvInvtel"];
		$fecharegistroinv=date("Y-m-d");
		$horaregistroinv=date("H:i:s");
		try {
			$guardado= GestionUsuario::GuardarUsuCasual($documentoinv,$nombreinv,$apellidoinv,$telefonoinv,$fecharegistroinv,$horaregistroinv);
			
		} catch (Exception $e) {
			echo $e;
		}
		echo $horaregistroinv;
		header("Location:../../Website/html/SuperAdmin.php?seccion=registro");
	break;
	case 'asignarcita':

		$codigocita=$_POST["codigoCitaUsuJv"];
		$Ndocumentocita=$_POST["NdocumentoCitaUsuJv"];
		$fechacita=$_POST["FechaCitaUsuJv"];
		$horacita=$_POST["HoraCitaUsuJv"];
		 try {
		 	$guardadocita= GestionUsuario::AsignarCita($codigocita,$Ndocumentocita,$fechacita,$horacita);
			
		 } catch (Exception $e) {
		 	echo $e;
		 }
		
	break;
	case 'GuardarcambiosJV':

		$codigo=$_POST["UsucodVerUsuJV"];
		$nombre=$_POST["UsunomVerUsuJV"];
		$apellido=$_POST["UsuapeVerUsuJV"];
		$edad=$_POST["UsuedadVerUsuJV"];
		$telefono=$_POST["UsutelVerUsuJV"];
		$celular=$_POST["UsucelVerUsuJV"];
		$mail=$_POST["UsumailVerUsuJV"];
		$direccion=$_POST["UsudirVerUsuJV"];
		$estado=$_POST["UsuestadoVerUsuJV"];
		$plan=$_POST["tipoplanVerUsuJV"];
		$FIplan=$_POST["FInicioVerUsuJV"];
		$FFplan=$_POST["FFinVerUsuJV"];
		try {
		 	$modificarcliente= GestionUsuario::ModificarCliente($codigo,$nombre,$apellido,$edad,$telefono,$celular,$mail,$direccion,$estado,$plan,$FIplan,$FFplan);
		} catch (Exception $e) {
		 	echo $e;
		}
		header("Location:../../Website/html/SuperAdmin.php?seccion=AllUsers");
	break;
	case 'BorrarUsuario':
		$codigo=$_POST["UsucodBorrarJV"];
		try {
		 	$BorrarUsuario= GestionUsuario::BorrarUsuario($codigo);
		} catch (Exception $e) {
		 	echo $e;
		}
		header("Location:../../Website/html/SuperAdmin.php?seccion=AllUsers");
	break;
	case 'IngresoUsuAlGym':
		$documento=$_POST["IngUsuDocJV"];
		
		try {
		 	$BorrarUsuario= GestionUsuario::BorrarUsuario($codigo);
		} catch (Exception $e) {
		 	echo $e;
		}
		header("Location:../../Website/html/SuperAdmin.php?seccion=AllUsers");
	break;

	//mauro
	case 'GuardarPlan':

		$codplan =$_POST["codplan"];
		$codfact=$_POST["codfactura"];
		$valorplan=$_POST["precioplan"];
		$descrip=$_POST["descripplan"];
		$cantdias=$_POST["cantdias"];
		$rangodias=$_POST["rangodias"];
				
		try {
			$guardadoplan= GestionUsuario::GuardarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias);
			
		} catch (Exception $e) {	
			echo $e;
		}

		header("Location:../../Website/html/SuperAdmin.php?seccion=planes");
		
	break;
	//mauro
	case 'BorrarPlan':

		$codigo=$_POST["PlanCodBorrarMC"];
		try {
		 	$modificarcliente= GestionUsuario::BorrarPlan($codplan);
		} catch (Exception $e) {
		 	echo $e;
		}
		header("Location:../../Website/html/SuperAdmin.php?seccion=planes");
	break;
	}
  
?>
