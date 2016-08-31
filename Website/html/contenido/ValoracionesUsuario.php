<?php  ?>
<div class="row">
	<div class="col m5">
		<div class="card">
			<div class="card-title">
				<h5>Ultima Valoracion Registrada</h5>
			</div>
			<div class="card-content">
				<div class="col m4">
					<ul>
						<li>Fecha</li>
						<li>Codigo</li>
						<li>Peso</li>
						<li>Estatura</li>
						<li>IMC</li>
						<li>Recomendacion</li>
					</ul>
				</div>
				<div class="col m8">
					<ul class="collection">
				      	<?php 
			      			echo "<li class='collection-item'>".$Vlrcion["6"]."</li>";
			      			echo "<li class='collection-item'>".$Vlrcion["1"]."</li>";
			      			echo "<li class='collection-item'>".$Vlrcion["2"]."</li>";
			      			echo "<li class='collection-item'>".$Vlrcion["3"]."</li>";
			      			echo "<li class='collection-item'>".$Vlrcion["4"]."</li>";
			      			echo "<li class='collection-item'>".$Vlrcion["5"]."</li>";
				      	?>
				    </ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col m7">
		<div class="card">
			<div class="card-title">
				<h5>Historial de Valoraciones</h5>
			</div>
			<div class="card-content">
				
			</div>
		</div>
	</div>
</div>