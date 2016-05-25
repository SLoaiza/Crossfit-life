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
// Santiago
		function GuardarEmp($usu_cod, $usu_edad, $usu_nom, $usu_ape, $usu_tel, $usu_cel, $usu_mail, $usu_dir){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta = "INSERT INTO usuarios (usu_cod,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir) values (?,?,?,?,?,?,?)";
			$query= $pdo->prepare($consulta);
			$query->execute(array($usu_cod, $usu_edad, $usu_nom, $usu_ape, $usu_tel, $usu_cel, $usu_mail, $usu_dir));

			ConexionBD::CerrarBD();
		}
	}




?>
