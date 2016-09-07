<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="post" enctype="multipart/form-data">
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
									<input type="file" name="imagen" class="imagen file-field input-field" value="subirimagen">
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
					<button type="submit" name="action" class="btn" value="GuardarEqui" onclick="mensaje()">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="reset" name="action" class="btn">Cancelar</button>
				</center>
			</div>
		</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
function mensaje() {
	swal({
		title: "Excelente",
		type: 'success',
		text: "Recurso guardado correctamente",
		timer: 2900,
		showConfirmButton: false
	});
}
</script>
