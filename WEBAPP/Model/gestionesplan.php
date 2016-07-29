<?php
	class GestionPlan{
		//mauro
		function GuardarPlan($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultaUC = "INSERT INTO plan (plan_cod,factura_cod,plan_precio,plan_desc,plan_dias,plan_rango) values (?,?,?,?,?,?)";
			$queryUC= $pdo->prepare($consultaUC);
			$queryUC->execute(array($codplan,$codfact,$valorplan,$descrip,$cantdias,$rangodias));
			//$pdo= ConexionBD::CerrarBD();
			ConexionDB::CerrarBD();

		}
		//mauro
		function MostrarPlanesPorcodigo($codigo){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="Select plan.plan_cod, plan.factura_cod, plan.plan_precio, plan.plan_desc, plan.plan_dias, plan.plan_rango ";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));
			// $pdo->CerrarBD();
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $result;
		}
	}



 ?>