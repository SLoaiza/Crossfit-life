<?php
	session_start();
	date_default_timezone_set('America/Bogota');
	require_once("../Model/conexionbd.php");
	require_once("../Model/gestiones.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
	case 'INGRESAR':
		$ndoc=$_POST["log_doc"];
		$pass=$_POST["log_pass"];

		$inj="'or'1'='1";
		if (($ndoc==$inj)and($pass==$inj)) {
			echo "intento de inyection por login. fallido"."<br>";

		}elseif (($ndoc==$inj)or($pass==$inj)) {
			echo "intento de injection fallido en algun campo";
		}else{
			if($ndoc=="" and $pass==""){
	 			echo "<script>alert('Por favor ingrese datos');</script>";
			}elseif ($ndoc=="" or $pass=="") {
		 		echo "<script>alert('Falta un campo por llenar, Por favor Verifica!');</script>";
			}else{
		 		try {
		 			$usuario = GestionUsuario::Login($ndoc);
		 			if (($usuario[0]!="") or ($usuario[0]!=null)) {
		 				if (password_verify($pass,$usuario[1])) {
	 						$_SESSION["codigo_usuario"] = $usuario[0];
		 					$_SESSION["nombre_usuario"] = $usuario[2];
		 					$_SESSION["apellido_usuario"] = $usuario[3];
		 					$_SESSION["telefono_usuario"] = $usuario[4];
		 					$_SESSION["celular_usuario"] = $usuario[5];
		 					$_SESSION["mail_usuario"] = $usuario[6];
		 					$_SESSION["direccion_usuario"] = $usuario[7];
		 					$_SESSION["estado_usuario"] = $usuario[8];
		 					$_SESSION["edad_usuario"] = $usuario[9];
		 					$_SESSION["inicio_plan_usuario"] = $usuario[10];
		 					$_SESSION["fin_plan_usuario"] = $usuario[11];
		 					$_SESSION["rol_usuario"] = $usuario[12];
		 					$_SESSION["rol_nom_usuario"] = $usuario[13];
		 					$_SESSION["codigo_plan_usuario"] = $usuario[14];
		 					$_SESSION["nombre_plan_usuario"] = $usuario[15];
		 					$_SESSION["dias_plan_usuario"] = $usuario[16];
		 					$_SESSION["rango_plan_usuario"] = $usuario[17];
		 					$_SESSION["precio_plan_usuario"] = $usuario[18];
		 					if($usuario[12] == '1'){
			 				header("Location: ../../Website/html/SuperAdmin.php?S=aW5pY2lv");
				 			}elseif ($usuario[12] == '2') {
				 				echo "hola Admin";
				 			}elseif($usuario[12] == '3'){
				 				echo "hola instructor";
				 			}elseif($usuario[12] == '4'){
				 				header("Location: ../../Website/html/Usuario.php");
				 			}else{
				 				header("Location: ../../Website/html/index.php");
				 			}
	 					}else{
	 						header("Location: ../../Website/html/index.php");
	 					}
		 			}else{
		 				header("Location: ../../Website/html/index.php");
		 			}
		 		} catch (Exception $e) {
		 			echo $e;
				}
			}
		}
	break;
	// Santiago
	case 'GuardarEmp':
		sleep(3);
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
				header("Location:../../Website/html/SuperAdmin.php?S=cmVnaWVtcGxl");
 		 		} catch (Exception $e) {
 		 		echo $e;
 		 		}
			}
	break;
	case 'GuardarEqui':
		sleep(3);
		$codrecu = $_POST["codrecu"];
		$nom = $_POST["recunom"];
		$desc = $_POST["desc"];
		$fech = $_POST["fecha"];

		$carpeta="Maquinas";
			$dir="../../Website/imagenes/".$carpeta."/";
			$archivo=basename($_FILES["imagen"]["name"]);
			$extencion=pathinfo($archivo, PATHINFO_EXTENSION);
			date_default_timezone_set('America/Bogota');
			$archivo=$dir."files_".date('Ymd-His').".".$extencion;
			$check=getimagesize($_FILES["imagen"]["tmp_name"]);
			if ($check!==false) {
				if (file_exists($archivo)) {
					echo "Ya existe";
				}else{
					if ($_FILES["imagen"]["size"]>2000000) {
						echo "Muy pesado";
					}else{
						if ($extencion != "jpg" && $extencion!="jpeg" && $extencion!="png") {
							echo "no son imagenes";
						}else{
							if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo)) {
								echo "Archivo guardado";
							}
						}
					}
				}
			}
		 	try {
		 		$usuario = GestionUsuario::GuardarEqui($codrecu, $nom, $archivo, $desc, $fech);
		 		echo "Guardar con exito";
 	 	 		} catch (Exception $e) {
 	 	 		echo $e;
 	 	 		}
		 	header("Location:../../Website/html/SuperAdmin.php?S=cmVnaXJlY3Vy");
	break;
	case'RegistrarUsuario':
		sleep(3);
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

		if (strcmp($pass, $confirmpass) >=0) {
			$pass=password_hash($_POST["passwordUsujv"],PASSWORD_DEFAULT);
			try {
				$usuario = GestionUsuario::GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$codigo_plan,$inicio,$fin);
			} catch (Exception $e){
				echo $e;
			}
			header("Location:../../Website/html/SuperAdmin.php?S=cmVnaXN0cm8=");
		}
	break;
	case 'IngresoUsuarioCasual':
		sleep(2);
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
		header("Location:../../Website/html/SuperAdmin.php?S=aW5ncmVzbw==");
	break;
	case 'asignarcita':
		sleep(3);
		$codigocita=$_POST["codigoCitaUsuJv"];
		$Ndocumentocita=$_POST["NdocumentoCitaUsuJv"];
		$fechacita=$_POST["FechaCitaUsuJv"];
		$horacita=$_POST["HoraCitaUsuJv"];

		//$var1="6";
		//$var2="1023";
		//$var3="4";
		//$var4="5";
		//$var5="6";
		//$var6="7";

		 try {
		 	$guardadocita= GestionUsuario::AsignarCita($codigocita,$Ndocumentocita,$fechacita,$horacita);
		 	//$guardadoaccion= GestionUsuario::GuardarACT($var1,$var2,$var3,$var4,$var5,$var6);
		 	header("Location:../../Website/html/SuperAdmin.php?S=Y2l0YXM=");
		 } catch (Exception $e) {
		 	echo $e;
		 }

	break;
	case 'GuardarcambiosJV':
		sleep(3);
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
		header("Location:../../Website/html/SuperAdmin.php?S=QWxsVXNlcnM=");
	break;
	case 'IngresoUsuAlGym':
		sleep(2);
		$codigoIng=substr(date("Y"), -2).date("mdhis");
		$documentoIng=$_POST["IngUsuDocJV"];
		$fechaIng=date("Y-m-d");
		$horaIng=date("H:i:s");
		// $var1="B";
		// $var2="1023";
		// $var3="A";
		// $var4="A";
		// $var5="A";
		// $var6="A";
		 try {
		  	$Ingresar= GestionUsuario::IngresarUsuario($codigoIng,$documentoIng,$fechaIng,$horaIng);
		  	//$accion=GestionUsuario::GuardarACT($var1,$var2,$var3,$var4,$var5,$var6);
		 } catch (Exception $e) {
		  	echo $e;
		 }
		 header("Location:../../Website/html/SuperAdmin.php?S=aW5ncmVzbw==");
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

		header("Location:../../Website/html/SuperAdmin.php?S=cGxhbmVz");

	break;

	case 'Editplan':

		$codplan =$_POST["codplanedit"];
		$codfact=$_POST["facturaplanedit"];
		$valorplan=$_POST["precioplanedit"];
		$descrip=$_POST["descripplanedit"];
		$cantdias=$_POST["cantdiasedit"];
		$rangodias=$_POST["rangodiasedit"];

		try {
			GestionUsuario::EditarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias);

		} catch (Exception $e) {
			echo $e;
		}

		header("Location:../../Website/html/SuperAdmin.php?S=cGxhbmVz");

	break;


	case 'CancelarCitaJV':
		sleep(3);
		$codigo = $_POST["CitacodCJV"];
		try {
			GestionUsuario::CancelarCita($codigo);
			header("Location:../../Website/html/SuperAdmin.php?S=Y2l0YXM=");
		} catch (Exception $e) {
			echo $e;
		}
	break;
	case 'EQ':
		$codigo=$_POST["codigo"];
		try {
			GestionUsuario::verequipo($codigo);
			header("Location:../../Website/html/contenido/verequipo.php");
		} catch (Exception $e) {
			echo $e;
		}
		break;
	}

?>
