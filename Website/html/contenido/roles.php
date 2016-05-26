<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>Rol</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
	 						</tr>
							<tr>
								<td>
									<div class="col m6 s6">
									<label for="ndoc">Codigo rol</label>
									<input type="text" name="rol_cod" id="ndoc">
								  </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="col m6 s6">
									<label for="nombres">Nombre del rol</label>
									<input type="text" name="nom_rol" id="nombres">
								  </div>
								</td>
								</tr>
							<tr>
							<td>
										<div class="col m6 s6">
											<label for="jvInicio">Fecha de inicio</label>
											<input type="date" class="rol_fecha" placeholder="Inicio del plan" id="jvInicio">
										</div>
								</td>
							</tr>
				</table>
			</div>
			<center>
				<input type="submit" name="action" id="registrar" value="Registrar">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="action" id="cancelar" value="Cancelar">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" id="limpiar" value="Limpiar" onclick="">
			</center>
		</div>
	</form>
</div>
