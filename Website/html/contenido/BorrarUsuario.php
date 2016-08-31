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
 						<center>
	 						<h3>Borrar Datos De: <?php echo $usuarios["usu_nom"]; ?><?php echo $usuarios["usu_ape"]; ?></h3>
	 						<h6>Numero de documento de identidad: <?php echo $usuarios["usu_cod"]; ?></h6>
	 					</center>
 					</thead>
 					<tbody>
 						<tr class="col m12 s12">	
 							<td class="col m3 s3">
								<input type="hidden" name="UsucodBorrarJV"  value="<?php echo $usuarios["usu_cod"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3"> 
 								<label for="nombre">nombre</label>
 								<br>
								<input type="text" readonly="" name="UsunomBorrarJV" id="UsunomBorrarJV" value="<?php echo $usuarios["usu_nom"]; ?>">
 							</td>
 							<td class="col m3 s3"> 
 								<label for="apellido">apellido</label>
								<br>
								<input type="text" readonly="" name="UsuapeBorrarJV" id="UsuapeBorrarJV" value="<?php echo $usuarios["usu_ape"]; ?>">
 							</td>
 							<td class="col m1 s1"> 
 								<label for="edad">edad</label>
								<br>
								<input type="text" readonly="" name="UsuedadBorrarJV" id="UsuedadBorrarJV" value="<?php echo $usuarios["usu_edad"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3">
 								<label for="telefono">telefono</label>
								<br>
								<input type="text" readonly="" name="UsutelBorrarJV" id="UsuatelBorrarJV" value="<?php echo $usuarios["usu_tel"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="celular">celular</label>
								<br>
								<input type="text" readonly="" name="UsucelBorrarJV" id="UsucelBorrarJV" value="<?php echo $usuarios["usu_cel"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="mail">mail</label>
								<br>
								<input type="text" readonly="" name="UsumailBorrarJV" id="UsumailBorrarJV" value="<?php echo $usuarios["usu_mail"]; ?>">
 							</td>
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3">
 								<label for="direccion">direccion</label>
								<br>
								<input type="text" readonly="" name="UsudirBorrarJV" id="UsudirBorrarJV"   value="<?php echo $usuarios["usu_dir"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="direccion">Estado</label>
								<br>
								<input type="text" readonly="" name="UsudirBorrarJV" id="UsudirBorrarJV"   value="<?php echo $usuarios["usu_estado"]; ?>">
 							</td>
 							<td class="col m3 s3">
 								<label for="direccion">Plan</label>
								<br>
								<input type="text" readonly="" name="UsudirBorrarJV" id="UsudirBorrarJV"   value="<?php echo $usuarios["plan_desc"]; ?>">
 							</td>	
 						</tr>
 						<tr class="col m12 s12">
 							<td class="col m3 s3">
 								<button type="submit" name="action" value="BorrarUsuario" class="btn">Confirmar</button>
 							</td>
 							<td class="col m3 s3">
 								<a href="SuperAdmin.php?seccion=AllUsers" class="btn">Cancelar</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</form>
 		</div>
 	</div>
 </div>

