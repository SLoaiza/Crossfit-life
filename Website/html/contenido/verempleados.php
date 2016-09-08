<?php $datosempleado=GestionUsuario::verempleado(); ?>
<div class="row">
	<div class="card" id="empleados">
		<div class="m12 s12">
			<table id="datatable" class="striped responsive-table">
				<thead>
					<span><h3>Empleados</h3></span>
					<tr>
						<td>item</td>
						<td>Cedula</td>
						<td>Edad</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>Telefono</td>
						<td>Puesto<td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						
						$item=1;
						foreach ($datosempleado as $row) {
							$rol=$row["rol_cod"];
							$numerodecontacto=$row["usu_tel"];
							
							//if ($rol==4) {
							// if ($numerodecontacto=="NaN") {
							// 	$numerodecontacto=$row["usu_cel"];
							// }

							if (isset($numerodecontacto) or $numerodecontacto==null) {
								$numerodecontacto="NaN";
							}else{
								$numerodecontacto=$row["usu_cel"];
								if (isset($numerodecontacto) or $numerodecontacto==null) {
									$numerodecontacto="NaN";
								}
							}
							echo "<tr>
									<td>".$item."</td>
									<td>".$row["usu_cod"]."</td>
									<td>".$row["usu_edad"]."</td>
									<td>".$row["usu_nom"]."</td>
									<td>".$row["usu_ape"]."</td>
									<td>".$numerodecontacto."</td>
									<td>".$row["rol_nom"]."</td>
									<td><a href='SuperAdmin.php?S=VerUsuario&codigo_usuario=".$row["usu_cod"]."'>Ver Empleado</a>
									</td>
								</tr>";
							$item++;
							//}
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