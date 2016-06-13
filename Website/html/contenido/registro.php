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
									<input type="text" name="ApellidosUsujv" id="apellidos" required="">
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
									<input type="text" name="passwordUsujv" id="pass" required="" maxlength="15">
									<br>
									Nivel: <span id="nivelpass"></span>
								</div>
							</td>
							<td >
								<div class="col m6 s6">
									<label for="cpass">Confirme su Contraseña</label>
									<input type="text" name="confirmpasswordUsujv" id="cpass" required="" maxlength="15">
									<br>
									Coincide: <span id="coincidepass"></span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-field col s12">
								    <select name="tipoplanUsujv" id="planUsujv" required="">
								      <option value="0" readonly="">Seleccione un Plan</option>
									  <?php 
									  	foreach ($datosdeplan as $row) {
									  		echo "<option value=".$row["plan_cod"].">".$row["plan_desc"]."</option>";
									  	}
									   ?>
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
					<button type="reset" >Limpiar</button>
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
