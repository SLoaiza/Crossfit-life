<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="planes">
				<div class="card-title">
					<h5>Planes</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>

									<label for="plan_cod">Código del Plan</label>
									<input type="text" name="codplan" id="plan_cod" required="">

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
				<center>
					<td>
						<button type="submit" name="action" value="GuardarPlan">Guardar</button>
					</td>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="action" id="cancelar" value="Cancelar">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" id="limpiar" value="Limpiar" onclick="">
				</center>
			</div>
		</div>
	</form>
</div>