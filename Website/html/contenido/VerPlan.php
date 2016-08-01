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
 						<tr class= "colm12 s12"

 						</tr>
 					</tbody>>
 				</table>

