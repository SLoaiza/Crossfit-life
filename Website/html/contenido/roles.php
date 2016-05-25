<div class="row">
	<form action="../../WEBAPP/Controller/controller.php" method="POST">
		<div class="col m10 s10 offset-m1 offset-s1">
			<div class="card" id="registro">
				<div class="card-title">
					<h5>Rol</h5>
				</div>
				<div class="card-content">
					<table>
						<tbody>
							<tr>
								<td>
									<input type="radio" id="rdTI" name="group1" value="targeta">
									<label for="rdTI">T.I</label>
									&nbsp;&nbsp;&nbsp;
									<input type="radio" id="rdCC" name="group1" value="cedula">
									<label for="rdCC">C.C</label>
									&nbsp;&nbsp;&nbsp;
									<input type="radio" id="rdOTRO" name="group1"
									value="otro">
									<label for="rdOTRO">OTRO</label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="ndoc">Codigo</label>
									<input type="text" name="Ndoc" id="ndoc">
								</td>
							</tr>
							<tr>
								<td>
									<label for="nombres">Nombres Completos</label>
									<input type="text" name="Nombres" id="nombres">
								</td>
								<td>
									<label for="apellidos">Apellidos Completos</label>
									<input type="text" name="Apellidos" id="apellidos">
								</td>
							</tr>
							<tr>
								<td>
									<label for="telefono">Fecha</label>
									<input type="text" name="telefono" id="telefono">
								</td>
								<td>
								
