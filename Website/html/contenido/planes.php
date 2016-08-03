<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="planes">
				<div class="card-title">
					<h4>Planes</h4>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>

									<label for="plan_cod">Código del Plan</label>
									<input type="text" name="codplan" id="plan_cod" required="">

								</td>

								<td>

									<label for="nombres">Código de la Factura</label>
									<input type="text" name="codfactura" id="factura_cod" required="">

								</td>
								<td>

									<label for="precios">Costo del Plan</label>
									<input type="number" name="precioplan" min="1" id="plan_precio" required="">

								</td>
							</tr>
							<tr>
								<td colspan="3">
								<!-- <div class="input-field col s12 m12"> -->
								<label for="textarea1">Descripción del Plan</label>
			          <input  type="text" length="1000" name="descripplan"id="textarea1" class="textarea" maxlength="1000" </textarea>

							</td>
							</tr>
        </div>
							<tr>
									<td>
										<label for="dias">Días del Plan</label>

										<input type="number"  name="cantdias" min="1" max="365" placeholder="Ingrese Numero de Días" id="numdias" required="">
									</td>
									<td>
										<label for="rango">Rango del Plan</label>

										<input type="number"  name="rangodias" min="1" max="365" placeholder="Ingrese rango de Días" id="plan_rango" required="">
									</td>
								
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<center>
					<td>
						<button type="submit" onclick="mensaje()" name="action" class="btn" value="GuardarPlan">Guardar</button>

					</td>
					
				</center>

				<table id="datatable" style="border:solid 1px;" class="striped responsive-table">
				<thead>
					<tr>
						<td>Código del plan</td>						
						<td>Costo del plan</td>
						<td>Descripción</td>
						<td>Nro de Dias</td>
						<td>Acciones</td>
						
					</tr>
				</thead>
				<tbody>
					<?php 
						$item = 1;
						foreach ($datostblplan as $row) {
							echo "<tr>
									<td>".$row["plan_cod"]."</td>									
									<td>".$row["plan_precio"]."</td>
									<td>".$row["plan_desc"]."</td>
									<td>".$row["plan_rango"]."</td>
									<td><a href='SuperAdmin.php?S=VerPlan&plan_cod=".$row["plan_cod"]."'>Ver Plan</a>-
										<a href='SuperAdmin.php?seccion=planes=".$row["plan_cod"]."'>Eliminar</a>
									</td>
								  </tr>";
							$item++;
						}

					 ?>
				</tbody>
			</table>
			</div>

		</div>

	</form>
	
</div>
<script>
	$("#datatable").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });

</script>

<script type="text/javascript">
	function mensaje(){
		if (confirm('¿Estas seguro de enviar este formulario?'))
		alert("Formulario Guardado");
	}
</script>
