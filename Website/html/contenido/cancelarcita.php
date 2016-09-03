<?php 
	$cita = GestionUsuario::MostrarCitaPorcodigo($_GET["codigo_cita"]);
 ?>
 <div class="row">
 	<div class="card">
 		<div class="card-title"></div>
 		<div class="card-content">
 			<form action="../../WEBAPP/Controller/controller.php" method="POST">
 				<center>
	 				<table>
	 					<thead>
	 						<center><h3>¿Esta seguro que desea cancelar esta cita?</h3></center>
	 					</thead>
	 					<tbody>
	 						<tr class="col m12 s12">	
	 							<td class="col m12 s12 center">
	 								<label><h5>Codigo De Cita: <?php echo $cita["cita_cod"]; ?></h5></label>
									<input type="hidden" name="CitacodCJV"  value="<?php echo $cita["cita_cod"]; ?>">
	 							</td>
	 						</tr>
	 						<tr class="col m12 s12">
	 							<td class="col m3 s3 offset-m3 "> 
	 								<label for="CitanomusuCJV">Nombre Usuario</label>
	 								<br>
									<input type="text" name="CitanomusuCJV" id="CitanomusuCJV" value="<?php echo $cita["usu_nom"]; ?>" readonly="">
	 							</td>
	 							<td class="col m3 s3 "> 
	 								<label for="CitaapeusuCJV">Apellido Usuario</label>
									<br>
									<input type="text" name="CitaapeusuCJV" id="CitaapeusuCJV" value="<?php echo $cita["usu_ape"]; ?>" readonly="">
	 							</td>
	 						</tr>
	 						<tr class="col m12 s12">
	 							<td class="col m3 s3 offset-m3">
	 								<label for="CitafechaCJV">Fecha De Cita</label>
									<br>
									<input type="text" name="CitafechaCJV" id="CitafechaCJV" value="<?php echo $cita["cita_fecha"]; ?>" readonly="">
	 							</td>
	 							<td class="col m3 s3">
	 								<label for="CitahoraCJV">Hora De Cita</label>
									<br>
									<input type="text" name="CitahoraCJV" id="CitahoraCJV" value="<?php echo $cita["cita_hora"]; ?>" readonly="">
	 							</td>

	 						</tr>
	 						<tr>
 								<td class="col m2 s2 offset-m4">
 									<button type="submit" name="action" class="btn orange disabled= " value="CancelarCitaJV" id="CancelarCitaJV">Cancelar Cita</button>
 								</td>
 								<td class="col m2 s2">
 									<a href="SuperAdmin.php?S=Y2l0YXM=" class="btn">Cancelar</button>
 								</td>
	 						</tr>
	 					</tbody>
	 				</table>
 				</center>
 			</form>
 		</div>
 	</div>
 </div>
 <script>
 	$("#CancelarCitaJV").click(function(){
 		swal({   
			title: "Proceso completado",   
			type: "success",
			text: "Cita cancelada satisfactoriamente",   
			timer: 3000,   
			showConfirmButton: false 
		});
 	});
 </script>