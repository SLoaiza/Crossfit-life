<?php
$imagen = $_POST["imagen"]
switch ($imagen) {
	case 'subirimagen':

		$directorio="../../../WEBAPP/Views/Assets/Images";
		$archivo=basename($_FILES["imagen"]["name"]);
		$extencion=pathinfo($archivo, PATHINFO_EXTENSION);
		date_default_timezone_set('America/Bogota');
		$archivo= $directorio."imagen_".date("Ymd-His").".".$extencion;

		$check=getimagesize($_FILES["imagen"]["tmp_name"]);
		if ($check!== false) {
			if (file_exists($archivo)) {
				echo "el archivo ya existe";
			}else{
				if ($_FILES["imagen"]["size"] > 8388608) {
					echo "El archivo no puede pasar mas de 1MB";
				}else{
					if ($extencion!="jpg" && $extencion!="jpeg" && $extencion!="png") {
						echo "solo puedes subir imagenes jpg o png";
					}else{
						if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo)) {
							echo "La imagen se ha subido correctamente y tiene el nombre: ".basename($archivo);
						}else{
							echo "oops! ocurrio el siguiente error <strong>".$_FILES["imagen"]["error"]."</strong>";
						}
					}
				}
			}
		}else{
			echo "el archivo no es una imagen";
		}
		break;

}

 ?>
