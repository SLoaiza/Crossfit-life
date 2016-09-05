<div class="row">
	<div class="card" id="asignaciondecitas">
		<div class="card-title">
			<h4>Asignacion de citas para Valoracion</h4>
		</div>
		<div class="card-content">
			<form action="../../WEBAPP/Controller/controller.php" method="POST">
				<div class="row">
					<div class="col m12 s12">
						<div class="col m2 s12">
							Codigo Cita: <input type="text" readonly="" name="codigoCitaUsuJv" value="<?php
								date_default_timezone_set('America/Bogota');
								$numero=rand();
								$año=date("Y");
								$mes=date("m")*1;
								$dia=date("d")*1;
								$hora=date("His");
								$codigo=substr($año, -2).$mes.$dia.substr("$numero", -1).$hora;
								echo $codigo;
							 ?>">
						</div>
						<div class="col m2 s12">
							<label for="NdocumentoCitaUsuJv">Numero De Documento</label>
							<input type="text" name="NdocumentoCitaUsuJv" id="NdocumentoCitaUsuJv" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
						</div>
						<div class="col m2 s12">
							<label for="FechaCitaUsuJv">Fecha</label>
							<input type="date" name="FechaCitaUsuJv" id="FechaCitaUsuJv" class="datepicker" required="">
						</div>
						<div class="col m2 s12">
							<label for="HoraCitaUsuJv">Hora</label>
							<input type="text" name="HoraCitaUsuJv" id="HoraCitaUsuJv" required="" readonly="">
						</div>
						<div class="col m4 s12">
							<br><br>
							<span><button type="submit" name="action" value="asignarcita" class="btn orange" id="asignarcita" onclick="mensaje()">Asignar Cita</button></span>
							&nbsp;&nbsp;&nbsp;
							<span><button type="reset" class="btn orange">Cancelar</button></span>
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<table id="datatable" style="border:solid 1px;" class="striped responsive-table">
					<thead>
						<tr>
							<td>Codigo</td>
							<td>Nº Documento</td>
							<td>Nombres</td>
							<td>Apellidos</td>
							<td>Telefono</td>
							<td>Fecha</td>
							<td>Hora</td>
							<td>Cancelar</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$item = 1;
							foreach ($datosdecita as $row) {
								echo "<tr>
										<td>".$row["cita_cod"]."</td>
										<td>".$row["usu_cod"]."</td>
										<td>".$row["usu_nom"]."</td>
										<td>".$row["usu_ape"]."</td>
										<td>".$row["usu_tel"]."</td>
										<td>".$row["cita_fecha"]."</td>
										<td>".$row["cita_hora"]."</td>
										<td><span onclick='cancelar(".$row["cita_cod"].")' style='color:#2196f3; cursor:pointer;'>Cancelar Cita<span></td>
									  </tr>";
								$item++;
							}

						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>

	function mensaje() {
		swal({
			title: "Excelente",
			type: 'success',
			text: "Cita asignada correctamente",
			timer: 2900,
			showConfirmButton: false
		});
	}

	function cancelar(codigo){
		swal({
			title: "Espera un momento",
			type: "warning",
			text: "Mientras Cargamos Los Datos",
			timer: 2000,
			showConfirmButton: false
		});
		var rol = <?php echo $_SESSION["rol_usuario"]; ?>;
		if (rol==1) {
			setTimeout(function(){
				window.location='SuperAdmin.php?S=<?php echo base64_encode("cancelarcita");?>&codigo_cita='+codigo;
			}, 2000);
		}else{
			setTimeout(function(){
				window.location='Admin.php?S=<?php echo base64_encode("cancelarcita");?>&codigo_cita='+codigo;
			}, 2000);
		}
	}
	$("#datatable").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });
	$("#HoraCitaUsuJv").ptTimeSelect({
		hoursLabel:'Horas',
		minutesLabel:'Minutos',
		setButtonLabel:"Seleccionar"
	});


</script>
