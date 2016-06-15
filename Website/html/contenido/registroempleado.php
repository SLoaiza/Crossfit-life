<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="post">
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
									<label for="nrodoc">Nº Documento de Identidad</label>
									<input type="text" name="nrodoc" id="nrodoc">
								</td>
								<td>
									<label for="edad">Edad</label>
									<input type="text" name="edad" id="edad">
								</td>
							</tr>
							<tr>
								<td>
									<label for="nombres">Nombres Completos</label>
									<input type="text" name="nombres" id="nombres">
								</td>
								<td>
									<label for="apellido">Apellidos Completos</label>
									<input type="text" name="apellido" id="apellido">
								</td>
							</tr>
							<tr>
								<td>
									<label for="tel">Telefono Fijo</label>
									<input type="text" name="tel" id="tel">
								</td>
								<td>
									<label for="celular">Número Celular</label>
									<input type="text" name="cel" id="cel">
								</td>
							</tr>
							<tr>
								<td>
									<label for="mail">Correo Electronico</label>
									<input type="text" name="mail" id="mail">
								</td>
								<td>
									<label for="dir">Direccion de residencia</label>
									<input type="text" name="dir" id="dir">
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
									<input type="text" name="pass" id="pass" required="" maxlength="15">
									<br>
									Nivel: <span id="nivelpass"></span>
								</div>
							</td>
							<td >
								<div class="col m6 s6">
									<label for="cpass">Confirme su Contraseña</label>
									<input type="text" name="cpass" id="cpass" required="" maxlength="15">
									<br>
									Coincide: <span id="coincidepass"></span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-field col s12">
								    <select name="rolusu">
								      <option  disabled selected>Seleccione un rol</option>
								      <option value="1" >Recepcionista</option>
								      <option value="2">Instructor</option>
								    </select>
								    <label>Seleccione rol</label>
								  </div>
							</td>
						</tr>
					</table>
				</div>
				<center>
					<button type="submit" name="action" class="btn" value="GuardarEmp">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="action" class="btn" onclick="limpiar()">Cancelar</button>
				</center>
			</div>
		</div>
	</form>
</div>
<script>
	$("#pass").focusout(function(){
      var pass=document.getElementById('pass').value;
      if (pass.length==0) {
      	alert('Por Favor Digite Contraseña.');
      }else if(pass.length>0 && pass.length<=7){
      	alert('La contraseña debe de ser con un minimo de 8 digitos.');
      	$("#nivelpass").text("Muy Bajo");
      	document.getElementById('nivelpass').style.color="#d50000";
      }else if(pass.length<=8){
      	$("#nivelpass").text("Bajo");
      	document.getElementById('nivelpass').style.color="#c62828";
      }else if(pass.length<=12){
      	$("#nivelpass").text("Medio");
      	document.getElementById('nivelpass').style.color="#01579b";
      }else if(pass.length<=15){
      	$("#nivelpass").text("Alto");
      	document.getElementById('nivelpass').style.color="#9e9d24";
      }
    });
    $("#cpass").focusout(function(){
      var pass=document.getElementById('pass').value;
      var coincidepass=document.getElementById('cpass').value;

      if (pass==coincidepass) {
      	$("#coincidepass").text("Coincide");
      	document.getElementById('coincidepass').style.color="#827717";
      }else{
      	$("#coincidepass").text("No Coincide");
      	document.getElementById('coincidepass').style.color="#f44336";
      }

    });

</script>
