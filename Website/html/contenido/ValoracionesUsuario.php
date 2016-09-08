<?php  ?>
<div class="row">
	<div class="col m5">
		<div class="card">
			<div class="card-title">
				<h5>Ultima Valoracion Registrada</h5>
			</div>
			<div class="card-content">
				<div class="row">
					<div class="col m12 center">
						<span>
							<ul class="collection"  style="width:50%; display:inline-block; text-align:center;">
								<li class='collection-item'>Fecha</li>
								<li class='collection-item'>Codigo</li>
								<li class='collection-item'>Peso</li>
								<li class='collection-item'>Estatura</li>
								<li class='collection-item'>IMC</li>
							</ul>
						</span>
						<span>
							<ul class="collection"  style="width:40%; display:inline-block; text-align:center;">
						      	<?php 
					      			echo "<li class='collection-item'>".$Vlrcion["6"]."</li>";
					      			echo "<li class='collection-item'>".$Vlrcion["1"]."</li>";
					      			echo "<li class='collection-item'>".$Vlrcion["2"]." Kg. </li>";
					      			echo "<li class='collection-item'>".$Vlrcion["3"]." cm. </li>";
					      			echo "<li class='collection-item'>".$Vlrcion["4"]."</li>";
						      	?>
						    </ul>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col m12">
						<center>
							Recomendacion
						</center>
						<textarea name="" id="" cols="30" rows="10" readonly="" placeholder="<?php echo $Vlrcion["5"] ?>"></textarea>
					</div>
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