<?php 
	$planes = GestionUsuario::MostrarPlanesPorcodigo($_GET["plan_cod"]);
 ?>
 <div class="row">
 	<div class="card">
 		<div class="card-title"></div>
 		<div class="card-content">
 			<form action="../../WEBAPP/Controller/controller.php" method="POST">
 				<table>
						<tbody>
							<tr>
								<td>

									<label for="plan_cod">Código del Plan: <?php echo $planes["plan_cod"]; ?></label>
									<input type="hidden" name="codplan" id="plan_cod" value="<?php echo $planes["plan_cod"]; ?>">

								</td>

								<td>

									<label for="nombres">Código de la Factura</label>
									<input type="text" name="codfactura" id="factura_cod" required="">

								</td>
								<td>

									<label for="precios">Costo del Plan</label>
									<input type="number" name="precioplan" id="plan_precio" required="">

								</td>
							</tr>
							<tr>
								<td colspan="3">
								<!-- <div class="input-field col s12 m12"> -->
								<label for="textarea1">Descripción del Plan</label>
			          <input  type="text" length="1000" name="descripplan"id="textarea1" class="textarea" maxlength="1000" </textarea>

							</td>
							</tr>
        </div>
							<tr>
									<td>
										<label for="dias">Días del Plan</label>

										<input type="number"  name="cantdias" min="1" max="365" placeholder="Ingrese Numero de Días" id="numdias" required="">
									</td>
									<td>
										<label for="rango">Rango del Plan</label>

										<input type="number"  name="rangodias" min="1" max="365" placeholder="Ingrese rango de Días" id="numdias" required="">
									</td>
								<!--<td>
									<div>
										<label for="jvInicio">Fecha de inicio</label>
										<input type="date" name="diaini" class="datepicker" placeholder="Inicio del plan" id="jvInicio">
									</div>
								</td>
									<div>
								<td>
										<label for="jvFinalizacion">Fecha de finalizacion</label>
										<input type="date" name="diafin" class="datepicker" placeholder="Finalizacion del plan" id="jvFinalizacion">
									</div>-->
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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
