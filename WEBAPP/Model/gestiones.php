<?php
	class GestionUsuario{
		function Login($ndoc, $pass){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultalog="select * from usuario where usu_cod=? and usu_clave=? ";
			$querylog= $pdo->prepare($consultalog);
			$querylog->execute(array($ndoc,$pass));
			$resultlog=$querylog->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $resultlog;
		}
// Santiago
		function GuardarEmp($nrod, $edad, $nom, $ape, $tel, $cel, $corr, $dire, $rol){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta = "INSERT INTO usuario (usu_cod,usu_edad,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir, rol_cod) values (?,?,?,?,?,?,?,?,?)";
			$query= $pdo->prepare($consulta);
			$query->execute(array($nrod, $edad, $nom, $ape, $tel, $cel, $corr, $dire, $rol));

			ConexionBD::CerrarBD();
		}
		function GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$codigo_plan,$inicio,$fin){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultausu = "INSERT INTO usuario (usu_cod,plan_cod,rol_cod,usu_clave,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir,usu_estado,usu_edad,usu_fecha,usu_plan_inicio,usu_plan_fin) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";;
			$queryGU= $pdo->prepare($consultausu);
			$queryGU->execute(array($cedula,$codigo_plan,$rol,$pass,$nombres, $apellidos,$telefono,$celular,$correo,$dir,$estado,$edad,$fecharegistro,$inicio,$fin));
			$pdo= ConexionBD::CerrarBD();
		}
		function MostrarUsuarios(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT usuario.usu_cod, usuario.usu_edad,usuario.usu_nom, usuario.usu_ape, usuario.usu_tel, usuario.usu_cel, plan.plan_desc,usuario.usu_estado, usuario.rol_cod,usuario.usu_estado from plan inner join usuario on plan.plan_cod=usuario.plan_cod ORDER BY usuario.usu_nom;";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function MostrarDatosPorcodigo($codigo){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="Select usuario.usu_cod, plan.plan_cod, plan.plan_desc, usuario.usu_nom, usuario.usu_ape, usuario.usu_tel, usuario.usu_cel, usuario.usu_mail, usuario.usu_dir, usuario.usu_estado, usuario.usu_edad from usuario inner join plan on plan.plan_cod=usuario.plan_cod where usu_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));
			// $pdo->CerrarBD();
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function ConsultarIngresado($documentoconsulta){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaing="select * from usuario where usu_cod=?";
			$query= $pdo->prepare($consultaing);
			$query->execute(array($documentoconsulta));
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function MostrarIngresado(){
			$mostrar = GestionUsuario::ConsultarIngresado(self::$documentoconsulta);
		}
		function GuardarUsuCasual($documentoinv,$nombreinv,$apellidoinv,$telefonoinv,$fecharegistroinv,$horaregistroinv){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUC = "INSERT INTO usuario_casual (usu_cas_cod,usu_cas_nom,usu_cas_ape,usu_cas_tel,usu_cas_fecha,usu_cas_hora) values (?,?,?,?,?,?)";
			$queryUC= $pdo->prepare($consultaUC);
			$queryUC->execute(array($documentoinv,$nombreinv,$apellidoinv,$telefonoinv,$fecharegistroinv,$horaregistroinv));
			$pdo= ConexionBD::CerrarBD();
			header("Location:../../Website/html/SuperAdmin.php?seccion=registro");
		}
		function MostrarTodasLasCitas(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT cita.cita_cod, cita.usu_cod, usuario.usu_nom, usuario.usu_ape, cita.cita_fecha, cita.cita_hora FROM cita inner join usuario on cita.usu_cod=usuario.usu_cod ORDER BY cita_fecha ";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function AsignarCita($codigocita,$Ndocumentocita,$fechacita,$horacita){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUC = "INSERT INTO cita (cita_cod,usu_cod,cita_fecha,cita_hora) values (?,?,?,?)";
			$queryUC= $pdo->prepare($consultaUC);
			$queryUC->execute(array($codigocita,$Ndocumentocita,$fechacita,$horacita));
			$pdo= ConexionBD::CerrarBD();
			echo $codigocita;
		}
		function MostrarTodosLosPlanes(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT * from plan";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function ModificarCliente($codigo,$nombre,$apellido,$edad,$telefono,$celular,$mail,$direccion,$estado,$plan,$FIplan,$FFplan){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="UPDATE usuario set plan_cod=?, usu_nom=? , usu_ape=?, usu_tel=? , usu_cel=? ,usu_mail=? , usu_dir=? ,usu_estado=? , usu_edad=? ,usu_plan_inicio=? ,usu_plan_fin=? where usu_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($plan,$nombre,$apellido,$telefono,$celular,$mail,$direccion,$estado,$edad,$FIplan,$FFplan,$codigo));
			// $pdo->CerrarBD();
			ConexionDB::CerrarBD();
		}
		function BorrarUsuario($codigo){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="delete from usuario where usu_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));
			// $pdo->CerrarBD();
			ConexionDB::CerrarBD();
		}
		//mauro
		function GuardarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUC = "INSERT INTO plan (plan_cod,factura_cod,plan_precio,plan_desc,plan_dias,plan_rango) values (?,?,?,?,?,?)";
			$queryUC= $pdo->prepare($consultaUC);
			$queryUC->execute(array($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias));
			//$pdo= ConexionBD::CerrarBD();
			echo "Guardo con Exito";
			
		}
	}




?>
