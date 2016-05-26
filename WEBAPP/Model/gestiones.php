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
		function GuardarEmp($nrod, $edad, $nom, $ape, $tel, $cel, $corr, $dire, $rol){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta = "INSERT INTO usuario (usu_cod,usu_edad,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir, rol_cod) values (?,?,?,?,?,?,?,?,?)";
			$query= $pdo->prepare($consulta);
			$query->execute(array($nrod, $edad, $nom, $ape, $tel, $cel, $corr, $dire, $rol));

			ConexionBD::CerrarBD();
		}
	}




?>
