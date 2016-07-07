<?php 
	$nom_dia=strftime("%A");
	switch ($nom_dia) {
		case 'Monday':
			$nom_dia="Lunes";
		break;
		case 'Tuesday':
			$nom_dia="Martes";
		break;
		case 'Wednesday':
			$nom_dia="Miercoles";
		break;
		case 'Thursday':
			$nom_dia="Jueves";
		break;
		case 'Friday':
			$nom_dia="Viernes";
		break;
		case 'Saturday':
			$nom_dia="Sabado";
		break;
		case 'Sunday':
			$nom_dia="Domingo";
		break;
	}
?>
<div class="row" >
	<div class="" id="ingreso">
		<center>
			<div class="col m6 s12">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Ingreso De Usuarios Al Gimnasio</h5>
					</div>
					<div class="card-content">	
						<form action="SuperAdmin.php?S=<?php echo base64_encode("usuingresado");?>" method="POST">
							<label for="">Ingrese Numero De Documento</label>
							<br>
							<input type="text" id="NdocIngresoUsuJV" name="NdocIngresoUsuJV" required="" style="text-align: center; font-size: 16px; width: 200px;" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							<br>
							<button type="submit">Consultar</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col m6 s12">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Hora Y Fecha Actual</h5>
					</div>
					<div class="card-content">
						<table>
							<tr class="row">
								<span id="hora" class="col m4 s3"></span>
								<span id="min" class="col m4 s3"></span>
								<span id="seg" class="col m4 s3"></span>
							</tr>
							<tr class="row">
								<label for="" id="Nomdia"><?php echo $nom_dia?>/</label>
								<label for="" id="dia"><?php echo date("d"); ?>/</label>
								<label for="" id="mes"><?php echo date("m"); ?>/</label>
								<label for="" id="anho"><?php echo date("Y"); ?></label>
								
							</tr>
						</table>
					</div>
				</div>
			</div>
		</center>
		<div class="col m12 s12">
			<div class="card" id="casual">
				<div class="card-title">
					Ingreso De Usuario Casual
				</div>
				<div class="card_content">
					<form action="../../WEBAPP/Controller/controller.php" method="POST">
						<div class="col m3 s6">
							<label for="">Numero de Documento</label>
							<input type="text" name="jvInvndoc" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></input>
						</div>
						<div class="col m3 s6">
							<label for="">Nombres</label>
							<input type="text" name="jvInvnom" required=""></input>
						</div>
						<div class="col m3 s6">
							<label for="">Apellidos</label>
							<input type="text" name="jvInvape" required=""></input>
						</div>
						<div class="col m3 s6">
							<label for="">Telefono</label>
							<input type="text" name="jvInvtel" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></input>
						</div>
						<br>
						<button type="submit" name="action" value="IngresoUsuarioCasual">Ingresar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>