<div class="row">
	<div class="card" id="allusersJV">
		<div class="m12 s12">
			<table id="datatable">
				<thead>
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
										<td><a href='SuperAdmin.php?seccion=VerUsuario&codigo_usuario=".$row["usu_cod"]."'>Ver Usuario</a>-
											<a href='SuperAdmin.php?seccion=BorrarUsuario&codigo_usuario=".$row["usu_cod"]."'>Eliminar</a>
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