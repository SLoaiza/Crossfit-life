<div class="row">
	<div class="card" id="allusersJV">
		<div class="m12 s12">
			<span style="float:right;"><a href="SuperAdmin.php?S=cmVnaXN0cm8=" class="btn float tooltipped" style="background-color: #463f67;" data-position="bottom" data-delay="50" data-tooltip="Agregar un nuevo cliente" ><i class="fa fa-user-plus" aria-hidden="true"></i></a></span>
			<table id="datatable" class="striped responsive-table">
				<thead>
					<tr><h3>Listado De Clientes</h3></tr>
					<tr>
						<td>Registro</td>
						<td>Cedula</td>
						<td>Edad</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>Telefono</td>
						<td>Plan</td>
						<td>Estado</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						$item=1;
						foreach ($todoslosusuarios as $row) {
							$rol=$row["rol_cod"];
							$numerodecontacto=$row["usu_tel"];
							
							if ($rol==4) {
								if ($numerodecontacto=="NaN") {
									$numerodecontacto=$row["usu_cel"];
								}
								echo "<tr>
										<td>".$item."</td>
										<td>".$row["usu_cod"]."</td>
										<td>".$row["usu_edad"]."</td>
										<td>".$row["usu_nom"]."</td>
										<td>".$row["usu_ape"]."</td>
										<td>".$numerodecontacto."</td>
										<td>".$row["plan_desc"]."</td>
										<td>".$row["usu_estado"]."</td>
										<td><a href='SuperAdmin.php?S=VerUsuario&codigo_usuario=".$row["usu_cod"]."'>Ver Usuario</a>
										</td>
									</tr>";
								$item++;
							}
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$("#datatable").dataTable( {
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"}
    });

</script>