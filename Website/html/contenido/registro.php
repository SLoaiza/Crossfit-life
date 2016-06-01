<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="roles">
				<div class="card-title">
					<h5>Datos Personales</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
									<label for="ndoc">Nº Documento de Identidad</label>
									<input type="text" name="NdocUsujv" id="ndoc" required="">
									<input name="rolUsujv" value="4" hidden="">
								</td>
								<td>
									<label for="edad">Edad</label>
									<br>
									<input type="text" name="edadUsujv" id="edad" maxlength="2" style="width: 60px; font-size: 20px;" required="">
								</td>
							</tr>
							<tr>
								<td>
									<label for="nombres">Nombres Completos</label>
									<input type="text" name="NombresUsujv" id="nombres" required="">
								</td>
								<td>
									<label for="apellidos">Apellidos Completos</label>
									<input type="text" name="ApellidosUsujv" id="apellidos">
								</td>
							</tr>
							<tr>
								<td>
									<label for="telefono">Telefono Fijo</label>
									<input type="text" name="telefonoUsujv" id="telefono">
								</td>
								<td>
									<label for="celular">Numero Celular</label>
									<input type="text" name="celularUsujv" id="celular">
							</tr>
							<tr>
								<td>
									<label for="mail">Correo Electronico</label>
									<input type="text" name="correoUsujv" id="correo">
								</td>
								<td>
									<label for="direccion">Direccion de residencia</label>
									<input type="text" name="direccionUsujv" id="direccion">
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
								<div class="col m12 s12">
									<label for="pass">Contraseña</label>
									<input type="text" name="passwordUsujv" id="pass">
									<br>
									Nivel: <i></i>
								</div>
							</td>
							<td >
								<div class="col m6 s6">
									<label for="cpass">Confirme su Contraseña</label>
									<input type="text" name="confirmpasswordUsujv" id="cpass">
									<br>
									Coincide: <i></i>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-field col s12">
								    <select name="planUsujv">
								      <option value="0" disabled selected>Seleccione un Plan</option>
											<option value="0">-Ninguno-</option>
								      <option value="1">2x1</option>
								      <option value="2">uno viejo y uno nuevo</option>
								      <option value="3">familiar</option>
								    </select>
								    <label>Seleccione Plan</label>
								  </div>
							</td>
							<td>
								<div class="col m6 s6">
									<label for="jvInicio">Fecha de inicio</label>
									<input type="date" class="datepicker" placeholder="Inicio del plan" id="jvInicio" name="FInicioPlanUsujv">
								</div>
								<div class="col m6 s6">
									<label for="jvFinalizacion">Fecha de finalizacion</label>
									<input type="date" class="datepicker" placeholder="Finalizacion del plan" id="jvFinalizacion" name="FFinPlanUsujv">
								</div>
							</td>
						</tr>
					</table>
					<input name="EstadoUsujv" value="Activo" hidden="">
				</div>
				<center>
					<button type="submit" name="action" value="RegistrarUsuario">Registrar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" onclick="limpiar()">Limpiar</button>
				</center>
			</div>
		</div>
	</form>
</div>
