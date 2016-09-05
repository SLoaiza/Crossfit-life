<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h4>Registro de Nuevo Cliente</h4>
				</div>
				<div class="card-content">
					<table>
						<thead>
							<h5>Datos Personales</h5>
						</thead>
						<tbody>
							<tr>
								<td>
									<label for="ndoc">Nº Documento de Identidad</label>
									<input type="text" name="NdocUsujv" id="ndoc" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									<input name="rolUsujv" value="4" hidden="">
								</td>
								<td>
									<label for="edad">Edad</label>
									<br>
									<input type="text" name="edadUsujv" id="edad" maxlength="2" style="width: 60px; font-size: 20px;" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
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
									<input type="text" name="telefonoUsujv" id="telefono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
								</td>
								<td>
									<label for="celular">Numero Celular</label>
									<input type="text" name="celularUsujv" id="celular" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
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
					<center>
						<span class="btn orange" id="continuar" onclick="datos()">Continuar</span>
					</center>
				</div>
			</div>
		</div>


		<div class="col m10 s10 offset-m1 offset-s1" style="display:none;" id="datoscuenta">
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
									<input type="password" name="passwordUsujv" id="pass" required="" maxlength="15">
									<br>
									Nivel: <span id="nivelpass"></span>
								</div>
							</td>
							<td >
								<div class="col m6 s6">
									<label for="cpass">Confirme su Contraseña</label>
									<input type="password" name="confirmpasswordUsujv" id="cpass" required="" maxlength="15">
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
					<button type="submit" class="btn orange" name="action" value="RegistrarUsuario" id="terminar" onclick="mensaje()">Registrar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="reset" class="btn" onclick="habilitar()">Limpiar</button>
				</center>
			</div>
		</div>


	</form>
</div>
<script>
	function mensaje() {
		swal({
			title: "Excelente",
			type: 'success',
			text: "Usuario Registrado correctamente",
			timer: 2900,
			showConfirmButton: false
		});
	}
 	$(document).ready(function(){
 		$("#terminar").prop("disabled",true);
 		$("#cpass").prop("disabled",true);
 	});
	$("#pass").focusout(function(){
      var pass=document.getElementById('pass').value;
      if (pass.length==0) {
      	swal("Error!", "Por Favor Digite Contraseña.", "error");
      }else if(pass.length>0 && pass.length<=7){
      	swal("Error!", "La contraseña debe de ser con un minimo de 8 digitos.", "error");
      	$("#nivelpass").text("Muy Bajo");
      	document.getElementById('nivelpass').style.color="#d50000";
      }else if(pass.length==8){
      	$("#nivelpass").text("Bajo");
      	document.getElementById('nivelpass').style.color="#c62828";
      	$("#cpass").prop("disabled",false);
      }else if(pass.length<=12){
      	$("#nivelpass").text("Medio");
      	document.getElementById('nivelpass').style.color="#01579b";
      	$("#cpass").prop("disabled",false);
      }else if(pass.length<=15){
      	$("#nivelpass").text("Alto");
      	document.getElementById('nivelpass').style.color="#9e9d24";
      	$("#cpass").prop("disabled",false);
      }
    });
    $("#cpass").focusout(function(){
      var pass=document.getElementById('pass').value;
      var coincidepass=document.getElementById('cpass').value;
      if(pass=="" || pass==null || coincidepass=="" || coincidepass==null ){
      	$("#terminar").prop("disabled",true);
      }else{
      	if (pass==coincidepass) {
	      	$("#coincidepass").text("Coincide");
	      	document.getElementById('coincidepass').style.color="#827717";
	      	$("#terminar").prop("disabled",false);
	      }else{
	      	$("#coincidepass").text("No Coincide");
	      	document.getElementById('coincidepass').style.color="#f44336";
	      	$("#terminar").prop("disabled",true);
	      }
      }

    });
    function datos() {
    	var dato1=document.getElementById("ndoc").value;
    	var dato2=document.getElementById("edad").value;
    	var dato3=document.getElementById("nombres").value;
    	var dato4=document.getElementById("apellidos").value;
    	var dato5=document.getElementById("telefono").value;
    	var dato6=document.getElementById("celular").value;
    	var dato7=document.getElementById("correo").value;
		var dato8=document.getElementById("direccion").value;
		if (dato1=="" || dato2=="" || dato3=="" || dato4=="" || dato5=="" || dato6=="" || dato7=="" || dato8=="") {
			swal("Faltan algunos campos por llenar.","Por favor verifica los campos.","");
			document.getElementById("datoscuenta").style.display="none";
			document.getElementById("continuar").style.display="inline-block";
		}else{
			$("#datoscuenta").slideDown("show");
			document.getElementById("continuar").style.display="none";
			$("#ndoc").prop("readonly",true);
			$("#edad").prop("readonly",true);
			$("#nombres").prop("readonly",true);
			$("#apellidos").prop("readonly",true);
			$("#telefono").prop("readonly",true);
			$("#celular").prop("readonly",true);
			$("#correo").prop("readonly",true);
			$("#direccion").prop("readonly",true);

		}
    }
    function habilitar() {
    $("#ndoc").prop("readonly",false);
		$("#edad").prop("readonly",false);
		$("#nombres").prop("readonly",false);
		$("#apellidos").prop("readonly",false);
		$("#telefono").prop("readonly",false);
		$("#celular").prop("readonly",false);
		$("#correo").prop("readonly",false);
		$("#direccion").prop("readonly",false);
		document.getElementById("datoscuenta").style.display="none";
		document.getElementById("continuar").style.display="inline-block";
    }
</script>
