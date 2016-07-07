<?php 
require_once("../../WEBAPP/Model/gestiones2.php");
$usuariosingdehoy=GestionUsuario2::MostrarUsuariosDeHoy();
//
	$nom_dia=strftime("%A");
	switch ($nom_dia) {
		case 'Monday':
			$nom_dia="Lunes";
		break;
		case 'Tuesday':
			$nom_dia="Martes";
		break;
		case 'Wednesday':
			$nom_dia="Miercoles";
		break;
		case 'Thursday':
			$nom_dia="Jueves";
		break;
		case 'Friday':
			$nom_dia="Viernes";
		break;
		case 'Saturday':
			$nom_dia="Sabado";
		break;
		case 'Sunday':
			$nom_dia="Domingo";
		break;
	}
 ?>
<div class="row">
	<div class="card">
		<div class="card-title">
			<h2>DashBoard.</h2>
			<?php echo "Bienvenido ".$_SESSION["rol_nom_usuario"]; ?>
		</div>
		<div class="card-content">
			<div class="row">
				<div class="col m3 s12">
					<h4>Usuarios Ingresados Hoy</h4>
					<?php echo "<h5>".$nom_dia." ".date("d-m-Y")."</h5>"; ?>
				</div>
				<div class="col m9 s12">
					<table id="datatables" style="border:solid 1px;" class="striped responsive-table">
						<thead>
							<tr>
								<td>Registro</td>
								<td>Cedula</td>
								<td>Nombres</td>
								<td>Apellidos</td>
								<td>Plan</td>
								<td>Estado</td>
								<td>Fecha</td>
								<td>Hora</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								$item=1;
								foreach ($usuariosingdehoy as $row) {
										echo "<tr>
												<td>".$item."</td>
												<td>".$row[0]."</td>
												<td>".$row[1]."</td>
												<td>".$row[2]."</td>
												<td>".$row[3]."</td>
												<td>".$row[4]."</td>

												<td>".$row[6]."</td>
												<td>".$row[7]."</td>
											</tr>";
											$item++;
									}
							 ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col m12 s12" id="">
					<center><h4>Citas Para Hoy</h4></center>
					<table id="datatablecita" style="border:solid 1px;" class="striped responsive-table">
						<thead>
							<tr>
								<td>Codigo</td>
								<td>Nº Documento</td>
								<td>Nombres</td>
								<td>Apellidos</td>
								<td>Telefono</td>
								<td>Fecha</td>
								<td>Hora</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								$item=1;
								foreach ($citasdehoy as $fila) {
										echo "<tr>
												<td>".$fila[0]."</td>
												<td>".$fila[1]."</td>
												<td>".$fila[2]."</td>
												<td>".$fila[3]."</td>
												<td>".$fila[4]."</td>
												<td>".$fila[5]."</td>
												<td>".$fila[6]."</td>
											</tr>";
											$item++;
									}
							 ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col m5 s12">
					<h5>Ultimas Acciones Realizadas En El Sistema</h5>
					<ul class="collection">
						<?php 
							 foreach ($acciones as $dato) {
							 	echo "<li  class='collection-item avatar'>
							 		<span class='title'>".$dato[1]." ".$dato[2]."</span>
							 	      <p>
							 	      	Codigo: ".$dato[0]."
							 	      	<br>
							 	        Rol: ".$dato[4]."
							 	        <br>
							 	        Fecha / Hora: ".$dato[7]." / ".$dato[8]."
							 	        <br>
							 	        Modulo: ".$dato[5]."
							 	        <br>
								        Accion: ".$dato[6]."
							 	      </p>
							 	</li>";
							 }

						 ?>
					</ul>
				</div>
				<div class="col m7 s12">
					<div><h4>Nuevos Usuarios Registrados Hoy</h4></div>
					<div>
						<table id="NuevosUsuarios" style="border:solid 1px;" class="striped responsive-table">
							<thead>
								<tr>
									<td>registro</td>
									<td>Codigo</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>Plan</td>
								</tr>
							</thead>
							<tbody>
								<?php 
									$item=1;
									foreach ($usuariosnuevos as $filasU) {
										
										echo "<tr>
												<td>".$item."</td>
												<td>".$filasU[0]."</td>
												<td>".$filasU[1]."</td>
												<td>".$filasU[2]."</td>
												<td>".$filasU[3]."</td>
											</tr>";
										$item++;
									}

								 ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col m6 s12">
					<div><h4>Usuarios Casuales Con Mayor Asistencia</h4></div>
					<div>
						<table style="border:solid 1px;" class="striped responsive-table">
							<thead>
								<tr>
									<td>Codigo</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>ingresos</td>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach ($usuarioFrecuente as $filas) {
										echo "<tr>
												<td>".$filas[0]."</td>
												<td>".$filas[2]."</td>
												<td>".$filas[3]."</td>
												<td>".$filas[1]."</td>
											</tr>";
									}

								 ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col m6 s12">
					<h4>Cantidad De Usuarios En Cada Plan</h4>
					<br>
					<?php include('diagrama.php'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$("#datatables").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });
    $("#datatablecita").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });
    $("#NuevosUsuarios").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });

</script>