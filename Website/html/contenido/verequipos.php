<?php 
require_once('../../../WEBAPP/Model/gestiones.php');
$datos=Gestionusuario::verequipo($codigo);
 ?>
<div class="row">
	<form onsubmit="../../../WEBAPP/Controller/controller.php" method="post">
		<input type="text" name="codigo" name="action" value="EQ">
	</form>
	<?php 
		$item=1;
		foreach ($datos as $row) {
				echo $row["rec_nom"];
						
			}
	 ?>
</div>