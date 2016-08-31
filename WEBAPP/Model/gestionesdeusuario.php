<?php 
	class GestionesDeUsuario{
		function VerVlrcion($codigo){
			$pdo= ConexionDB::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$consultalog="select usuario.usu_cod, valoracion.vlrcion_cod, valoracion.vlrcion_peso, valoracion.vlrcion_estatura, valoracion.vlrcion_IMC, valoracion.vlrcion_recom, valoracion.vlrcion_fecha
				from usuario
				inner join valoracion
				on usuario.usu_cod = valoracion.usu_cod
				where usuario.usu_cod=?
				order by valoracion.vlrcion_fecha desc
				limit 0,1";
			$querylog= $pdo->prepare($consultalog);
			$querylog->execute(array($codigo));
			$resultlog=$querylog->fetch(PDO::FETCH_BOTH);
			ConexionDB::CerrarBD();
			return $resultlog;
		}
	}


 ?>