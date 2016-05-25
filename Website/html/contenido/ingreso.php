<div class="row">
	<div class="card-panel teal" id="ingreso">
		<center>
			<div class="col m6 s6">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Ingreso De Usuarios Al Gimnasio</h5>
					</div>
					<div class="card-content">
						<form action="../../WEBAPP/Controller/controller.php" method="POST">
							<label for="">Ingrese Numero De Documento</label>
							<br>
							<input type="text" name="ndoc" style="text-align: center; font-size: 16px; width: 200px;">
							<br>
							<input type="submit" name="action" value="Consultar">
						</form>
					</div>
				</div>
			</div>
			<div class="col m6 s6">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Datos De Usuario</h5>
					</div>
					<div class="card-content">
						<form action="../../WEBAPP/Controller/controller.php" method="POST">
							<table>
								<tbody>
									<tr>
										<td>
											<input type="text" disabled="" name="ndoc" placeholder="Nº Documento">
										</td>
										<td>
											<input type="text" disabled="" name="nombres" placeholder="Nombres">
										</td>
										<td>
											<input type="text" disabled="" name="apellidos" placeholder="Apellidos">
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" disabled="" name="fecha" placeholder="Fecha">
										</td>
										<td colspan="2">
											<input type="text" disabled="" name="enmora" placeholder="En Mora">
										</td>
									</tr>
								</tbody>
							</table>
							<tr>
							<input type="button" name="action" value="Ingreso">
							<input type="button" name="action" value="Ingreso">
						</form>
					</div>
				</div>
			</div>
		</center>
		<div class="col m12 s12">
			<div class="card">
				<div class="card-title">
					Usuario Casual
				</div>
				<div class="card_content">
					<form action="../../WEBAPP/Controller/controller.php" method="POST">
						<label for=""></label>
						<input type="text"></input>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>