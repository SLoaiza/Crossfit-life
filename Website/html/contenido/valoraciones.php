<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>Valoracion</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									<label for="ndoc">Codigo de valoracion</label>
									<input type="text" name="vlrcion_cod" id="ndoc">
								</td>
							</tr>
							<tr>
								<td>
									<label for="Peso">Peso</label>
									<input type="text" name="vlrcion_peso" id="apellidos">
								</td>
							</tr>
							<tr>
								<td>
									<label for="estatura">Estatura</label>
									<input type="text" name="vlrcion_estatura" id="telefono">
								</td>
								<td>
									<label for="imc">(IMC) Indice de masa corporal)</label>
									<input type="text" name="vlrcion_IMC" id="celular">
								</td>
							</tr>
							<tr>
								<td>
									<label for="clasificacion">Clasificacion</label>
									<input type="text" name="vlrcion_clasificacion" id="correo">
								</td>
								<td>
									<label for="recomendacion">Recomendacion</label>
									<input type="text" name="vlrcion_recom" id="direccion">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
      <center>
        <input type="submit" name="action" id="registrar" value="Registrar" onclick="mensaje()">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="action" id="cancelar" value="Cancelar">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" id="limpiar" value="Limpiar" onclick="">
      </center>
		</div>
		<script type="text/javascript">
		function mensaje() {
			swal({
				title: "Excelente",
				type: 'success',
				text: "Usuario Registrado correctamente",
				timer: 2900,
				showConfirmButton: false
			});
		}
		</script>
