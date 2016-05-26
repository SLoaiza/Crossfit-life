<?php
	class GestionUsuario{
		function Login($ndoc, $pass){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta="select * from usuario where usu_cod=? and usu_clave=? ";
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
		function GuardarUsu($cedula,$rol,$edad,$nombres,$apellidos,$telefono,$celular,$correo,$dir,$pass,$estado,$fecharegistro,$inicio,$fin){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consulta = "INSERT INTO usuario (usu_cod,rol_cod,usu_clave,usu_nom,usu_ape,usu_tel,usu_cel,usu_mail,usu_dir,usu_estado,usu_edad,usu_fecha,usu_inicio_plan,usu_fin_plan) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";;
			$query= $pdo->prepare($consulta);
			$query->execute(array($cedula,$rol,$pass,$nombres, $apellidos,$telefono,$celular,$correo,$dir,$estado,$edad,$fecharegistro,$inicio,$fin));
			$pdo= ConexionBD::CerrarBD();
		}
	}




?>
