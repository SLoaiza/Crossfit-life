<script>
	function insertar(){
		
		<?php 
		$documentoconsulta="<script>
			var documento = document.getElementById('NdocIngresoUsuJV').value;
			document.write(documento);
		</script>";
		$datosdeusuario=GestionUsuario::ConsultarIngresado($documentoconsulta);?>	
		var datos= <?php 
			foreach ($datosdeplan as $dato) {
				if($dato[2]=="40000"){
					echo $dato[2];
				};
			}
		 ?>;
		alert(datos);
		/**se tiene que crear un metodo que traiga todos los usuarios, y que muestre solamente los datos donde usu_cod es igual al campo obtenido por javascript**/
	}
</script>
<div class="row">
	<div class="" id="ingreso">
		<center>
			<div class="col m6 s6">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Ingreso De Usuarios Al Gimnasio</h5>
					</div>
					<div class="card-content">	
						<label for="">Ingrese Numero De Documento</label>
						<br>
						<input type="text" id="NdocIngresoUsuJV" name="NdocIngresoUsuJV" required="" style="text-align: center; font-size: 16px; width: 200px;">
						<br>
						<button onclick="insertar()">Consultar</button>
					</div>
				</div>
			</div>
			<div class="col m6 s6">
				<div class="card" id="cingreso">
					<div class="card-title">
						<h5>Datos De Usuario</h5>
					</div>
					<div class="card-content">
						<form action="../../WEBAPP/Controller/controller.php" method="POST">
							<table>
								<tbody>
									<tr>
										<td>
											<input type="text" disabled="" name="NDocIngresoUsuJV" placeholder="Nº Documento" id="doc">
										</td>
										<td>
											<input type="text" disabled="" name="nombresIngresoUsuJV" placeholder="Nombres">
										</td>
										<td>
											<input type="text" disabled="" name="apellidosIngresoUsuJV" placeholder="Apellidos">
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" disabled="" name="fecha" placeholder="Fecha">
										</td>
										<td>
											<input type="text" disabled="" name="plan" placeholder="Plan">
										</td>
										<td>
											<input type="text" disabled="" name="Estado" placeholder="Estado">
										</td>
									</tr>
								</tbody>
							</table>
							<tr>
							<input type="button" name="action" value="Ingreso">
						</form>
					</div>
				</div>
			</div>
		</center>
		<div class="col m12 s12">
			<div class="card" id="casual">
				<div class="card-title">
					Usuario Casual
				</div>
				<div class="card_content">
					<form action="../../WEBAPP/Controller/controller.php" method="POST">
						<div class="col m3 s3">
							<label for="">Numero de Documento</label>
							<input type="text" name="jvInvndoc" required=""></input>
						</div>
						<div class="col m3 s3">
							<label for="">Nombres</label>
							<input type="text" name="jvInvnom" required=""></input>
						</div>
						<div class="col m3 s3">
							<label for="">Apellidos</label>
							<input type="text" name="jvInvape" required=""></input>
						</div>
						<div class="col m3 s3">
							<label for="">Telefono</label>
							<input type="text" name="jvInvtel" required=""></input>
						</div>
						<br>
						<button type="submit" name="action" value="IngresoUsuarioCasual">Ingresar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>