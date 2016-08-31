<?php  
	$doc = $_POST["NdocUsujv"];
	$nom = $_POST["NombresUsujv"];
	$ape = $_POST["ApellidosUsujv"];
	$edad = $_POST["edadUsujv"];
	$rol = $_POST["rolUsujv"];
	$tel = $_POST["telefonoUsujv"];
	$cel = $_POST["celularUsujv"];
	$dir = $_POST["direccionUsujv"];
	$mail = $_POST["correoUsujv"];
	echo $mail;
?>
<form action="">
	<input name="NdocUsujv" value="<?php echo $doc ?>" hidden="">
	<input name="NombresUsujv" value="<?php echo $nom ?>" hidden="">
	<input name="ApellidosUsujv" value="<?php echo $ape ?>" hidden="">
	<input name="edadUsujv" value="<?php echo $edad ?>" hidden="">
	<input name="rolUsujv" value="<?php echo $rol ?>" hidden="">
	<input name="telefonoUsujv" value="<?php echo $tel ?>" hidden="">
	<input name="celularUsujv" value="<?php echo $cel ?>" hidden="">
	<input name="direccionUsujv" value="<?php echo $dir ?>" hidden="">
	<input name="correoUsujv" value="<?php echo $mail ?>" hidden="">	
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
				<button type="submit" class="btn orange" name="action" value="RegistrarUsuario" id="terminar">Registrar</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="reset" class="btn">Limpiar</button>
			</center>
		</div>
	</div>
</form>
<script>
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

</script>