<?php
	class GestionUsuario{
		function Login($ndoc){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultalog="select usuario.usu_cod, usuario.usu_clave, usuario.usu_nom, usuario.usu_ape, usuario.usu_tel, usuario.usu_cel, usuario.usu_mail, usuario.usu_dir, usuario.usu_estado, usuario.usu_edad, usuario.usu_plan_inicio, usuario.usu_plan_fin,
				rol.rol_cod, rol.rol_nom,
				plan.plan_cod, plan.plan_desc, plan.plan_dias, plan.plan_rango, plan.plan_precio
				from usuario
				inner join rol on rol.rol_cod = usuario.rol_cod
				inner join plan on plan.plan_cod = usuario.plan_cod
				where usu_cod=?";
			$querylog= $pdo->prepare($consultalog);
			$querylog->execute(array($ndoc));
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

			ConexionDB::CerrarBD();
		}
		function GuardarEqui($recod, $nomb, $img, $descr, $fecha){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta = "INSERT INTO recurso_fisico (rec_cod,rec_nom,rec_img,rec_desc,rec_fecha) values (?,?,?,?,?)";
			$query= $pdo->prepare($consulta);
			$query->execute(array($recod, $nomb, $img, $descr, $fecha));
			ConexionDB::CerrarBD();
		}
		function GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$codigo_plan,$inicio,$fin){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultausu = "INSERT INTO usuario (usu_cod,plan_cod,rol_cod,usu_clave,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir,usu_estado,usu_edad,usu_fecha,usu_plan_inicio,usu_plan_fin) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$queryGU= $pdo->prepare($consultausu);
			$queryGU->execute(array($cedula,$codigo_plan,$rol,$pass,$nombres, $apellidos,$telefono,$celular,$correo,$dir,$estado,$edad,$fecharegistro,$inicio,$fin));
		}
		 function ConsultarAcciones(){
		 	$pdo= ConexionDB::AbrirBD();
		 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 	$sql="SELECT usuario.usu_cod, usuario.usu_nom , usuario.usu_ape, rol.rol_cod, rol.rol_nom, seguimiento.segui_modu, seguimiento.segui_accion, seguimiento.segui_fecha, seguimiento.segui_hora FROM usuario inner join rol on usuario.rol_cod=rol.rol_cod inner join seguimiento on usuario.usu_cod=seguimiento.usu_cod order by seguimiento.segui_fecha desc, seguimiento.segui_hora desc limit 0,3";
		 	$query= $pdo->prepare($sql);
		 	$query->execute();
		    // $pdo->CerrarBD();
		 	$result=$query->fetchALL(PDO::FETCH_BOTH);
		 	ConexionDB::CerrarBD();
		 	return $result;
		 }
		 // function GuardarACT($var1,$var2,$var3,$var4,$var5,$var6){
		 // 	$pdo= ConexionDB::AbrirBD();
		 // 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 // 	$consultausu = "INSERT INTO seguimiento (segui_cod, usu_cod, segui_modu, segui_accion, segui_fecha, segui_hora) values (?,?,?,?,?,?)";
		 // 	$queryGU= $pdo->prepare($consultausu);
			// $queryGU->execute(array($var1,$var2,$var3,$var4,$var5,$var6));
		 // 	echo "guardado";
		 // }
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
			$sql="Select usuario.usu_cod, plan.plan_cod, plan.plan_desc, usuario.usu_nom, usuario.usu_ape, usuario.usu_tel, usuario.usu_cel, usuario.usu_mail, usuario.usu_dir, usuario.usu_estado, usuario.usu_edad, usuario.usu_plan_inicio, usuario.usu_plan_fin from usuario inner join plan on plan.plan_cod=usuario.plan_cod where usu_cod=?";
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
			$consultaing="Select usuario.usu_cod, plan.plan_cod, plan.plan_desc, usuario.usu_nom, usuario.usu_ape, usuario.usu_tel, usuario.usu_cel, usuario.usu_mail, usuario.usu_dir, usuario.usu_estado, usuario.usu_edad, usuario.usu_plan_fin from usuario inner join plan on plan.plan_cod=usuario.plan_cod where usu_cod=?";
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
			// $pdo= ConexionBD::CerrarBD();
		}
		function UsuarioFrecuente(){
			$pdo = ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUF="select usu_cas_cod , COUNT(usu_cas_cod) as ingresos, usu_cas_nom, usu_cas_ape, usu_cas_tel from usuario_casual group by usu_cas_cod order by ingresos desc";
			$queryUF= $pdo->prepare($consultaUF);
			$queryUF->execute();
			$resultUF=$queryUF->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $resultUF;
		}
		function NuevosUsuariosDeHoy(){
			$pdo = ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaNUDH="select usuario.usu_cod, usuario.usu_nom, usuario.usu_ape, plan.plan_desc from usuario inner join plan on usuario.plan_cod=plan.plan_cod where usuario.usu_fecha='".date("Y-m-d")."'";
			$queryNUDH= $pdo->prepare($consultaNUDH);
			$queryNUDH->execute();
			$resultNUDH= $queryNUDH->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $resultNUDH;
		}
		function DatosDiagrama(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$consultaDD="select usuario.plan_cod,plan.plan_desc, COUNT(usuario.plan_cod) as usuarios_por_plan from usuario inner join plan on usuario.plan_cod=plan.plan_cod group by usuario.plan_cod";
			$queryDD=$pdo->prepare($consultaDD);
			$queryDD->execute();
			$resultDD=$queryDD->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $resultDD;
		}
		function MostrarTodasLasCitas(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT cita.cita_cod, cita.usu_cod, usuario.usu_nom, usuario.usu_ape,usuario.usu_tel, cita.cita_fecha, cita.cita_hora FROM cita inner join usuario on cita.usu_cod=usuario.usu_cod ORDER BY cita.cita_fecha desc ";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function MostrarTodasLasCitasDeHoy(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT cita.cita_cod, cita.usu_cod, usuario.usu_nom, usuario.usu_ape,usuario.usu_tel, cita.cita_fecha, cita.cita_hora FROM cita inner join usuario on cita.usu_cod=usuario.usu_cod where cita.cita_fecha='".date("Y/m/d")."' ORDER BY cita.cita_hora desc ";
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
			// $pdo= ConexionBD::CerrarBD();
			// echo $codigocita;
		}
		function IngresarUsuario($codigoIng,$documentoIng,$fechaIng,$horaIng){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUC = "INSERT INTO ingreso_usu (ingr_cod,usu_cod,ingr_fecha,ingr_hora) values (?,?,?,?)";
			$queryUC= $pdo->prepare($consultaUC);
			$queryUC->execute(array($codigoIng,$documentoIng,$fechaIng,$horaIng));
			// $pdo= ConexionBD::CerrarBD();
			// echo $codigocita;
		}
		function MostrarTodosLosPlanes(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT plan_cod, plan_desc from plan";
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
		//mauro

		function GuardarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaplan = "INSERT INTO plan (plan_cod,factura_cod,plan_precio,plan_desc,plan_dias,plan_rango) values (?,?,?,?,?,?)";
			$queryplan= $pdo->prepare($consultaplan);
			$queryplan->execute(array($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias));
			//$pdo= ConexionBD::CerrarBD();
			ConexionDB::CerrarBD();
		}
		function MostrartblPlanes(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT plan.plan_cod, plan.plan_precio, plan.plan_desc,plan.plan_rango from plan";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		//mauro
		function MostrarPlanesPorcodigo($verplanes){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT * from plan where plan_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($verplanes));
			// $pdo->CerrarBD();
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function EditarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias){
			$pdo = ConexionDB::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	    $sql="UPDATE plan SET factura_cod= ? ,plan_precio= ?, plan_desc= ?, plan_dias= ?, plan_rango= ? WHERE plan_cod= ?";
	    $query= $pdo->prepare($sql);
	    $query->execute(array($codfact,$valorplan,$descrip,$cantdias,$rangodias,$codplan));
	    ConexionDB::CerrarBD();
		}
		function BorrarPlan()
			{
				$pdo = ConexionDB::AbrirBD();
				$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$deleteplan="delete from plan where plan_cod=?";
				$query= $pdo->prepare($deleteplan);

			}



		function MostrarCitaPorcodigo($codigo){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT cita.cita_cod, cita.cita_fecha, cita.cita_hora, usuario.usu_nom, usuario.usu_ape
				from cita
				inner join usuario
				on usuario.usu_cod=cita.usu_cod
				where cita.cita_cod= ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));
			// $pdo->CerrarBD();
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
		function CancelarCita($codigo)
		{
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$Ccita = "delete from cita where cita_cod=?";
			$query= $pdo->prepare($Ccita);
			$query->execute(array($codigo));
			//$pdo= ConexionBD::CerrarBD();
			ConexionDB::CerrarBD();
		}
	}




?>
