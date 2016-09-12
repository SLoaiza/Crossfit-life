<nav class="z-depth-1 m12 s12 menu" >
	<div class="nav-wrapper  z-depth-1" color:"#424242">
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons fa fa-bars"></i></a>
		<a href="#!" class="dropdown-button black-text right" data-activates="dropdown2" style="margin-right: 20px;"><i class="fa fa-cog fa-3x"></i></a>
		<ul class="hide-on-med-and-down">
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("inicio");?>" class="whithe-text">Inicio</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("ingreso");?>" class="whithe-text">Ingreso De Usuarios</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("AllUsers");?>" class="white-text">Clientes</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("Empleados");?>" class="white-text">Empleados</a></li>
			<li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;Gestiones</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#cabeza" class="black-text"><i class="fa fa-home"></i>Inicio</a></li>
			<li><a href=".slider" class="black-text"><i class="fa fa-sign-in"></i>Ingreso De Usuarios</a></li>
			<li><a href="#quienes_somos" class="black-text"><i class="fa fa-user-plus"></i>Nuevo Cliente</a></li>
			<li><a href="#slider2" class="black-text"><i class="fa fa-info-circle"></i>Registrar Empleados</a></li>
			<li><a href="#slider2" class="black-text"><i class="fa fa-heartbeat"></i>Citas Medicas</a></li>
			<li><a href="#slider2" class="black-text">Citas Medicas</a></li>
			<li><a href="#slider2" class="black-text">Valoraciones</a></li>
			<li><a href="#slider2" class="black-text">Roles</a></li>
			<li><a href="#slider2" class="black-text">Planes</a></li>
			<li><a href="#slider2" class="black-text">Recursos Fisicos</a></li>
			<li><a href="index.php" class="black-text"><i class="fa fa-sign-out"></i>Salir</a></li>
		</ul>


		<ul id="dropdown2" class="dropdown-content">
			<li><a href=""><i class="fa fa-user fa-1x"> Usuario</i></a></li>
			<li><a href="contenido/cerrarsesion.php"><i class="fa fa-power-off fa-1x"> Salir</i></a></li>
			<li><a href=""></a></li>
		</ul>
		<ul id="dropdown1" class="dropdown-content"  >
		  	<li><a href="SuperAdmin.php?S=<?php echo base64_encode("citas");?>" class="black-text">Citas Medicas</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("valoracion");?>" class="black-text">Valoraciones</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("roles");?>" class="black-text">Roles</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("planes");?>" class="black-text">Planes</a></li>
			<li><a href="SuperAdmin.php?S=<?php echo base64_encode("regirecur");?>" class="black-text">Recursos Fisicos</a></li>
			
			
		</ul>
	</div>
</nav>
