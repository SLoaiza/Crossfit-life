<div class="row">
	<div class="card" id="asignaciondecitas">
		<div class="card-title">
			<h4>Asignacion de citas para Valoracion</h4>
		</div>
		<div class="card-content">
			<form action="../../WEBAPP/Controller/controller.php" method="POST">
				<div class="col m6 s12">
								<div class="col m4 s12">
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
								<div class="col m4 s12">
									<label for="NdocumentoCitaUsuJv">Numero De Documento</label>
									<input type="text" name="NdocumentoCitaUsuJv" id="NdocumentoCitaUsuJv" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
								</div>
				</div>
				<div class="col m7 s12">
					<table>
						<thead>
							<h4>Fecha y Hora</h4>
						</thead>
						<tbody>
							<tr>
								<td>
									<label for="FechaCitaUsuJv">Fecha</label>
									<input type="date" name="FechaCitaUsuJv" id="FechaCitaUsuJv" class="datepicker" required="">
								</td>
								<td>
									<label for="HoraCitaUsuJv">Hora</label>
									<input type="text" name="HoraCitaUsuJv" id="HoraCitaUsuJv" required="" readonly="">
								</td>
							</tr>
							<tr>
								<td>
									<button type="submit" name="action" value="asignarcita">Asignar Cita</button>
								</td>
								<td>
									<button type="reset">Cancelar</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
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
									<td>Cancelar Cita</td>
								  </tr>";
							$item++;
						}

					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$("#datatable").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });
	$("#HoraCitaUsuJv").ptTimeSelect({
		hoursLabel:'Horas',
		minutesLabel:'Minutos',
		setButtonLabel:"Seleccionar"
	});


</script>