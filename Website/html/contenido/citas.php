<div class="row">
	<div class="card">
		<div class="card-title">
			<h4>Asignacion de citas para Valoracion</h4>
		</div>
		<div class="card-content">
			<form action="../../../WEBAPP/Controller/controller.php" method="POST">
				<table>
					<tr>
						<td>
							<label for="doc">Numero De Documento</label>
							<input type="text" id="doc" name="jvtxtCTdoc"/>
						</td>
						<td>
							<button type="submit" name="action" value="Consultarparacita"> Consultar </button>
						</td>
					</tr>
				</table>
			</form>
			<table>
				<tbody>
					<tr>
						<td>
							<input type="text" disabled="" name="cedulaUsuCitajv" placeholder="Nº Documento" value=""></input>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" disabled="" name="nombreUsuCitajv" placeholder="Nombre" value=""></input>
						</td>
						<td>
							<input type="text" disabled="" name="apellidoUsuCitajv" placeholder="Apellido" value=""></input>
						</td>
						<td>
							<input type="text" disabled="" name="edadUsuCitajv" placeholder="Edad" value=""></input>
						</td>
					</tr>
					<tr>
						<td>
							<label for="jvFCita">Fecha De Cita</label>
							<input type="date" class="datepicker" placeholder="Inicio del plan" id="jvFCita" name="jvFCita">
						</td>
						<td>
							<button type="submit" name="action"></button>
						</td>
					</tr>
				</tbody>
			</table>
			<table id="citas">
				<thead>
					<tr>
						<td>Nº Documento</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>Fecha De Cita</td>
						<td>Hora</td>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
