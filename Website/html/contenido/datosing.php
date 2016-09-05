<div class="row">
	<div class="card">
		<div class="card-content">
			<form action="../../WEBAPP/Controller/controller.php" method="POST">
				<table>
					<thead>
						<center>
							<h3>Hora de Ingreso: <?php echo date("h:i:s a"); ?></h3>
						</center>
					</thead>
					<tbody>
						<tr class="row">
							<td class="col m2 s4">
								<label for="">Numero de Documento</label>
								<input type="text" readonly="" name="IngUsuDocJV" value="<?php echo $consulta["usu_cod"] ?>" >
							</td>
						</tr>
						<tr class="row">
							<td class="col m3 s4">
								<label for="">Nombres</label>
								<input type="text" readonly="" name="IngUsuNomJV" value="<?php echo $consulta["usu_nom"] ?>" >
							</td>
							<td class="col m3 s4">
								<label for="">Apellidos</label>
								<input type="text" readonly="" name="IngUsuApeJV" value="<?php echo $consulta["usu_ape"] ?>" >
							</td>
							<td class="col m1 s1">
								<label for="">Edad</label>
								<input type="text" readonly="" name="IngUsuEdadJV" value="<?php echo $consulta["usu_edad"] ?>" >
							</td>
						</tr>
						<tr class="row">
							<td class="col m3 s2">
								<label for="">Estado Del Plan</label>
								<input type="text" readonly="" name="IngUsuEstadoJV" value="<?php echo $consulta["usu_estado"] ?>" >
							</td>
							<td class="col m3 s2">
								<label for="">Nombre Del Plan</label>
								<input type="text" readonly="" name="IngUsuPlanJV" value="<?php echo $consulta["plan_desc"] ?>" >
							</td>
							<td class="col m3 s2">
								<label for="">Fecha De Finalizacion Del Plan</label>
								<input type="text" readonly="" name="IngUsuFPlanJV" value="<?php echo $consulta["usu_plan_fin"] ?>" >
							</td>
						</tr>
						<tr class="row">
							<td>
								<button type="submit" name="action" value="IngresoUsuAlGym" class="btn orange" >Ingresar Usuario</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<script>
	function mensaje() {
		swal({
			title: "Excelente",
			type: 'success',
			text: "Usuario ingresado correctamente",
			timer: 1900,
			showConfirmButton: false
		});
	}
</script>
