<?php 
	class GestionUsuario2{
		
		function MostrarUsuariosDeHoy(){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="SELECT usuario.usu_cod, usuario.usu_nom, usuario.usu_ape, usuario.usu_estado, 
					plan.plan_desc, plan.plan_cod,
					ingreso_usu.ingr_fecha, ingreso_usu.ingr_hora
					FROM usuario
					INNER JOIN plan
					on usuario.plan_cod = plan.plan_cod
					INNER JOIN ingreso_usu
					on usuario.usu_cod=ingreso_usu.usu_cod
					WHERE ingreso_usu.ingr_fecha = '".date("Y-m-d")."' order by ingreso_usu.ingr_hora";
			$query= $pdo->prepare($sql);
			$query->execute();
			// $pdo->CerrarBD();
			$result=$query->fetchALL(PDO::FETCH_BOTH);
			//ConexionDB::CerrarBD();
			return $result;
		}
	}
 ?>