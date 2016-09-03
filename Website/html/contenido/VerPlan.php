<?php 
	$verplanes = GestionUsuario::MostrarPlanesPorcodigo($_GET["plan_cod"]);
 ?>
 <div class="row"> 	
 		<form action="../../WEBAPP/Controller/controller.php" method="POST">
 		<div class="col m10 s10 offset-m1 offset-s1">
 			<div class="card" id="planes">
 			<div class="card-title"></div>
 				<div class="card-content">
 			
 				<table>
 					<head>
 						<H4>Datos del Plan</H4>
 					</head>
 					<tbody>
 						<tr class= "colm12 s12">
 							<td class="colm12 s12">
	 							<label><h5>Código del Plan: <?php echo $verplanes["plan_cod"]; ?></h5></label>
	 							<input type="hidden" name="codplanver" value="<?php echo $verplanes["plan_cod"] ?>;" onKeypress="if(event.keyCode < 45 || (event.keyCode > 57)) event.returnValue = false;">
	 						</td>
 						</tr>
 						<tr class= "colm12 s12">
 							<td class="col m6 s6">
 								<label for="codfact">Código de la Factura</label>
 								<input type="text" name="facturaplanver" id="facturaplanver" value="<?php echo $verplanes["factura_cod"]; ?>">
 							</td>
 						
 							<td class="col m6 s6">
 								<label for="precios">Costo del Plan</label>
 								<input type="number" name="precioplan" min="1" id="plan_precio" value="<?php echo $verplanes["plan_precio"];?>"> 								
 							</td>
 							<tr>
								<td colspan="3">
								<!-- <div class="input-field col s12 m12"> -->
									<label for="textarea1">Descripción del Plan</label>
				          			<input  type="text" length="1000" name="descripplan"id="textarea1" class="textarea" maxlength="1000" value="<?php echo $verplanes["plan_desc"];?>"</textarea>

								</td>
							</tr>
						</tr>
						<tr class= "colm12 s12">
							<td class="col m6 s6">
								<label for="dias">Días del Plan</label>
								<input type="number"  name="cantdias" min="1" max="365" placeholder="Ingrese Numero de Días" id="numdias" required="" value="<?php echo $verplanes["plan_dias"];?>">
							</td>
							<td class="col m6 s6">
								<label for="rango">Rango del Plan</label>
								<input type="number"  name="rangodias" min="1" max="365" placeholder="Ingrese rango de Días" id="plan_rango" required="" value="<?php echo $verplanes["plan_rango"];?>">
							</td>						
						</tr>
						<tr>
							<td class="col m3 s2 offset-m2">
								<button type="submit" name="action" "></button>
							</td>
						</tr>


 						
 				</tbody>
 			</table>

