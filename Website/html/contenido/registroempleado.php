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
									<input type="text" name="nrodoc" id="nrodoc" required="">
								</td>
								<td>
									<label for="edad">Edad</label>
									<input type="text" name="edad" id="edad" >
								</td>
							</tr>
							<tr>
								<td>
									<label for="nombres">Nombres Completos</label>
									<input type="text" name="nombres" id="nombres" required="">
								</td>
								<td>
									<label for="apellido">Apellidos Completos</label>
									<input type="text" name="apellido" id="apellido" required="">
								</td>
							</tr>
							<tr>
								<td>
									<label for="tel">Telefono Fijo</label>
									<input type="text" name="tel" id="tel" >
								</td>
								<td>
									<label for="celular">Número Celular</label>
									<input type="text" name="cel" id="cel" >
								</td>
							</tr>
							<tr>
								<td>
									<label for="mail">Correo Electronico</label>
									<input type="text" name="mail" id="mail" >
								</td>
								<td>
									<label for="dir">Direccion de residencia</label>
									<input type="text" name="dir" id="dir" >
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
		<div  class="col m10 s10 offset-m1 offset-s1" style="display:none;" id="datoscuenta">
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
									<input type="password" name="pass" id="pass" required="" maxlength="15">
									<br>
									Nivel: <span id="nivelpass"></span>
								</div>
							</td>
							<td >
								<div class="col m6 s6">
									<label for="cpass">Confirme su Contraseña</label>
									<input type="password" name="cpass" id="cpass" required="" maxlength="15">
									<br>
									Coincide: <span id="coincidepass"></span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-field col s12">
								    <select name="rolusu" required="">
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
					<button type="submit" name="action" class="btn orange" value="GuardarEmp" onclick="mensaje()">Guardar</button>
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
			text: "Empleado guardado correctamente",
			timer: 2900,
			showConfirmButton: false
		});
	}
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
    function datos() {
    	var dato1=document.getElementById("nrodoc").value;
    	var dato2=document.getElementById("edad").value;
    	var dato3=document.getElementById("nombres").value;
    	var dato4=document.getElementById("apellido").value;
    	var dato5=document.getElementById("tel").value;
    	var dato6=document.getElementById("cel").value;
    	var dato7=document.getElementById("mail").value;
		var dato8=document.getElementById("dir").value;
		if (dato1=="" || dato2=="" || dato3=="" || dato4=="" || dato5=="" || dato6=="" || dato7=="" || dato8=="") {
			swal("Faltan algunos campos por llenar.","Por favor verifica los campos.","");
			document.getElementById("datoscuenta").style.display="none";
			document.getElementById("continuar").style.display="inline-block";
		}else{
			$("#datoscuenta").slideDown("show");
			document.getElementById("continuar").style.display="none";
			$("#nrodoc").prop("readonly",true);
			$("#edad").prop("readonly",true);
			$("#nombres").prop("readonly",true);
			$("#apellido").prop("readonly",true);
			$("#tel").prop("readonly",true);
			$("#cel").prop("readonly",true);
			$("#mail").prop("readonly",true);
			$("#dir").prop("readonly",true);

		}
    }
    function habilitar() {
    $("#ndoc").prop("readonly",false);
		$("#edad").prop("readonly",false);
		$("#nombres").prop("readonly",false);
		$("#apellido").prop("readonly",false);
		$("#tel").prop("readonly",false);
		$("#cel").prop("readonly",false);
		$("#mail").prop("readonly",false);
		$("#dir").prop("readonly",false);
		document.getElementById("datoscuenta").style.display="none";
		document.getElementById("continuar").style.display="inline-block";
    }
</script>
