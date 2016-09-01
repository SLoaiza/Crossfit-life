<?php
include_once('../../../WEBAPP/Model/gestiones.php');
$recurso = GestionUsuario::verrecur();

?>
<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="post">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>DATOS DEL EJERCICIO</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
									<label for="act_cod">Codigo</label>
									<input type="text" name="act_cod" id="act_cod">
								</td>
								<td>
                  <select name="centro" id="" required="">
                    <option value="0" readonly="">Seleccione recurso</option>
                    <?php
                      foreach ($recurso as $row) {
                        echo "<option value=".$row["rec_cod"].">".$row["rec_nom"]."</option>";
                      }
                     ?>
                  </select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="act_duracion">Duración</label>
									<input type="text" name="act_duracion" id="act_duracion" placeholder="Ejemplo:30 min">
								</td>
							</tr>
							<tr>
								<td>
									<label for="act_seccion">Numero de secciones</label>
									<input type="number"  name="act_seccion" id="act_seccion">
								</td>
							</tr>
              <tr>
								<td>
									<label for="act_rep">Numero de repeticiones</label>
									<input type="number"  name="act_rep" id="aact_rep">
								</td>
							</tr>
              <tr>
								<td>
                  <label for="fecha">Fecha</label>
									<input type="date" class="datepicker" name="fecha" id="fecha">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<center>
					<button type="submit" name="action" class="btn" value="Guardaract">Guardar</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="reset" name="action" class="btn">Cancelar</button>
				</center>
			</div>
		</div>
			</div>
		</div>
	</form>
</div>
