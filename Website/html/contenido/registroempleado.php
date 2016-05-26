<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>Datos Personales</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
									<input type="radio" id="rdTI" name="group1" value="targeta">
									<label for="rdTI">T.I</label>
									&nbsp;&nbsp;&nbsp;
									<input type="radio" id="rdCC" name="group1" value="cedula">
									<label for="rdCC">C.C</label>
									&nbsp;&nbsp;&nbsp;
									<input type="radio" id="rdOTRO" name="group1"
									value="otro">
									<label for="rdOTRO">OTRO</label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="ndoc">Nº Documento de Identidad</label>
									<input type="text" name="Ndoc" id="ndoc">
								</td>
								<td>
									<label for="edad">Edad</label>
									<input type="text" name="Edad" id="edad">
								</td>
							</tr>
							<tr>
								<td>
									<label for="nombres">Nombres Completos</label>
									<input type="text" name="Nombres" id="nombres">
								</td>
								<td>
									<label for="apellidos">Apellidos Completos</label>
									<input type="text" name="Apellidos" id="apellidos">
								</td>
							</tr>
							<tr>
								<td>
									<label for="telefono">Telefono Fijo</label>
									<input type="text" name="telefono" id="telefono">
								</td>
								<td>
									<label for="celular">Numero Celular</label>
									<input type="text" name="celular" id="celular">
								</td>
							</tr>
							<tr>
								<td>
									<label for="mail">Correo Electronico</label>
									<input type="text" name="correo" id="correo">
								</td>
								<td>
									<label for="direccion">Direccion de residencia</label>
									<input type="text" name="direccion" id="direccion">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>Datos de la Cuenta</h5>
				</div>
				<div class="card-content">
					<table>
						<tr>
							<td>
								<label for="pass">Contraseña</label>
								<input type="text" name="password" id="pass">
								<br>
								Nivel: <i></i>
							</td>
							<td>
								<label for="cpass">Confirme su Contraseña</label>
								<input type="text" name="confirmpassword" id="cpass">
								<br>
								Coincide: <i></i>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-field col s12">
								    <select>
								      <option value="" disabled selected>Seleccione un rol</option>
								      <option value="1">Recepcionista</option>
								      <option value="2">Instructor</option>
								    </select>
								    <label>Seleccione rol</label>
								  </div>
							</td>
						</tr>
					</table>
				</div>
				<center>
					<button type="submit" name="button" value="GuardarEmp">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="button" onclick="limpiar()">Cancelar</button>
				</center>
			</div>
		</div>
	</form>
</div>