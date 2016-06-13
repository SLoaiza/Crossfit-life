<?php 
	$usuarios = GestionUsuario::MostrarDatosPorcodigo($_GET["codigo_usuario"]);
 ?>
 <div class="row">
 	<div class="card">
 		<div class="card-title"></div>
 		<div class="card-content">
 			<form action="../../WEBAPP/Controller/controller.php" method="POST">
 				<table>
 					<thead>
 						
 					</thead>
 					<tbody>
 						<tr class="col m12 s12">	
 							<td class="col m3 s3">
 								<label>Numero de documento de identidad: <?php echo $usuarios["usu_cod"]; ?></label>
								<input type="hidden" name="UsucodVerUsuJV"  value="<?php echo $usuarios["usu_cod"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3"> 
 								<label for="nombre">nombre</label>
 								<br>
								<input type="text" name="UsunomVerUsuJV" id="UsunomVerUsuJV" value="<?php echo $usuarios["usu_nom"]; ?>">
 							</td>
 							<td class="col m3 s3"> 
 								<label for="apellido">apellido</label>
								<br>
								<input type="text" name="UsuapeVerUsuJV" id="UsuapeVerUsuJV" value="<?php echo $usuarios["usu_ape"]; ?>">
 							</td>
 							<td class="col m1 s1"> 
 								<label for="edad">edad</label>
								<br>
								<input type="text" name="UsuedadVerUsuJV" id="UsuedadVerUsuJV" value="<?php echo $usuarios["usu_edad"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3">
 								<label for="telefono">telefono</label>
								<br>
								<input type="text" name="UsutelVerUsuJV" id="UsuatelVerUsuJV" value="<?php echo $usuarios["usu_tel"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="celular">celular</label>
								<br>
								<input type="text" name="UsucelVerUsuJV" id="UsucelVerUsuJV" value="<?php echo $usuarios["usu_cel"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="mail">mail</label>
								<br>
								<input type="text" name="UsumailVerUsuJV" id="UsumailVerUsuJV" value="<?php echo $usuarios["usu_mail"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="direccion">direccion</label>
								<br>
								<input type="text" name="UsudirVerUsuJV" id="UsudirVerUsuJV"   value="<?php echo $usuarios["usu_dir"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3">
 								<label for="">Estado De Usuario</label>
 								<select name="UsuestadoVerUsuJV" id="UsuestadoVerUsuJV">
 									<option value="<?php echo $usuarios["usu_estado"]; ?>" readonly="">Estado Actual: <?php echo $usuarios["usu_estado"]; ?></option>
 									<option value="Activo">Activo</option>
 									<option value="Inactivo">Inactivo</option>
 								</select>
 							</td>
 							<td class="col m3 s3">
 								<label for="">Seleccione un Plan</label>
 								<select name="tipoplanVerUsuJV" id="tipoplanVerUsuJV">
							      <option value="0">Seleccione un Plan</option>
								  <?php 
								  	foreach ($datosdeplan as $row) {
								  		echo "<option value=".$row["plan_cod"].">".$row["plan_desc"]."</option>";
								  	}
								   ?>
							    </select>
 							</td>
 							<td class="col m3 s3">
 								<label for="jvInicio">Fecha de inicio de plan</label>
								<input type="date" class="datepicker" placeholder="Inicio del plan" id="FInicioVerUsuJV" name="FInicioVerUsuJV">
 							</td>
 							<td class="col m3 s3">
 								<label for="jvInicio">Fecha de fin de plan</label>
								<input type="date" class="datepicker" placeholder="Fin del plan" id="FFinVerUsuJV" name="FFinVerUsuJV">
 							</td>
 						</tr>
 						<tr>
 								<td class="col m3 s2 offset-m2">
 									<span id="Modificar" class="btn" name="action">Habilitar Campos</span>
 								</td>
 								<td class="col m2 s2">
 									<button type="submit" name="action" class="btn orange disabled= " value="GuardarcambiosJV" id="guardarcambios">Guardar</button>
 								</td>
 								<td class="col m2 s2">
 									<a href="SuperAdmin.php?seccion=AllUsers" class="btn">Atras</button>
 								</td>
 						</tr>
 					</tbody>
 				</table>
 			</form>
 		</div>
 	</div>
 </div>
<script>
 	$(document).ready(function(){
 		$("#UsunomVerUsuJV").prop("readonly",true);
 		$("#UsuapeVerUsuJV").prop("readonly",true);
 		$("#UsuedadVerUsuJV").prop("readonly",true);
 		$("#UsuatelVerUsuJV").prop("readonly",true);
 		$("#UsucelVerUsuJV").prop("readonly",true);
 		$("#UsumailVerUsuJV").prop("readonly",true);
 		$("#UsudirVerUsuJV").prop("readonly",true);
 		$("#UsuestadoVerUsuJV").prop("readonly",true);
 		$("#tipoplanVerUsuJV").prop("readonly",true);
 		$("#FInicioVerUsuJV").prop("readonly",true);
 		$("#FFinVerUsuJV").prop("readonly",true);
 		$("#guardarcambios").addClass("btn orange disabled");

 		$("#Modificar").click(function(){
 			$("#UsunomVerUsuJV").prop("readonly",false);
	 		$("#UsuapeVerUsuJV").prop("readonly",false);
	 		$("#UsuedadVerUsuJV").prop("readonly",false);
	 		$("#UsuatelVerUsuJV").prop("readonly",false);
	 		$("#UsucelVerUsuJV").prop("readonly",false);
	 		$("#UsumailVerUsuJV").prop("readonly",false);
	 		$("#UsudirVerUsuJV").prop("readonly",false);
	 		$("#UsuestadoVerUsuJV").prop("readonly",false);
	 		$("#tipoplanVerUsuJV").prop("readonly",false);
	 		$("#FInicioVerUsuJV").prop("readonly",false);
	 		$("#FFinVerUsuJV").prop("readonly",false);
	 		
	 		$("#Modificar").addClass("btn orange disabled");
	 		$("#guardarcambios").removeClass("btn orange disabled").addClass("btn orange");
 		});
 	});
 </script>