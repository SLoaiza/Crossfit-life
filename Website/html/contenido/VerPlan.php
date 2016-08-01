<?php 
	$verplanes = GestionUsuario::MostrarPlanesPorcodigo($_GET["plan_cod"]);
 ?>
 <div class="row">
 	<div class="card">
 		<div class="card-title"></div>
 		<div class="card-content">
 			<form action="../../WEBAPP/Controller/controller.php" method="POST">
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
 							<td class="col m3 s3">
 								<label for="nombres">Código de la Factura</label>
 								<input type="text" name="facturaplanver" id="facturaplanver" value="<?php echo $verplanes["factura_cod"]; ?>">
 							</td>
 						
 					</tbody>
 				</table>

