<?php 
	class GestionUsuario{
		function Login($ndoc, $pass){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta="select * from usuario where usu_ced=? and usu_clave=? ";
			$query= $pdo->prepare($consulta);
			$query->execute(array($ndoc,$pass));
			$result=$query->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
		return $result;
		}
	}

	

	
?>