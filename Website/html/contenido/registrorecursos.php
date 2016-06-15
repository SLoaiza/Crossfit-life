<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="post">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
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
								<td action="subir.php" method="POST" enctype="multipart/form-data">
									<label for="">Imagen</label>
									<br>
									<input type="file" name="imagen" class="imagen" value="subirimagen" multiple="multiple">
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
				<center>
					<button type="submit" name="action" class="btn" value="GuardarEqui">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="action" class="btn" onclick="limpiar()">Cancelar</button>
				</center>
			</div>
		</div>
			</div>
		</div>
	</form>
</div>
