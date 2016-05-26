<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="post">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registroempleado">
				<div class="card-title">
					<h5>DATOS DEL RECURSO FISICO</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
									<label for="codrecu">Codigo del recurso</label>
									<input type="text" name="codrecu" id="codrecu">
								</td>
								<td>
									<label for="recunom">Nombre del recurso</label>
									<input type="text" name="recunom" id="recunom">
								</td>
							</tr>
							<tr>
								<td>
									<label for="img">Imagen</label>
									<input type="text" name="img" id="img">
								</td>
								<td>
									<label for="desc">Descripción</label>
									<input type="text" name="desc" id="desc">
								</td>
							</tr>
							<tr>
								<td>
									<label for="fecha">Fecha</label>
									<input type="date" class="datepicker" name="fecha" id="fecha">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
				<center>
					<button type="submit" name="action" value="GuardarEmp">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="action" onclick="limpiar()">Cancelar</button>
				</center>
			</div>
		</div>
	</form>
</div>
