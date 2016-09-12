<?php
	require_once("../../WEBAPP/Model/conexionbd.php");
	require_once("../../WEBAPP/Model/gestiones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crossfit Life</title>
	<meta name="Description" content="">
	<meta name="viewport" content="width=400, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="../../WEBAPP/Views/Assets/Plugins/materialize/css/materialize.min.css">
  	<script src="../../WEBAPP/Views/Assets/Plugins/materialize/js/materialize.min.js"></script>
  	<link rel="stylesheet" href="../css/style.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,700,900,900italic,700italic,500italic,500,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#ingresar").click(function(){
				$("#vmodal").slideDown("show");
			});
			$("#cerrar").click(function(){
				$("#vmodal").slideUp("show");
			});
		});
	</script>


</head>
<!--scrolltop fixed jquery-->
<!-- menú -->
<body>
	<div class="container-fluid">
		<div id="vmodal">
			<center>
				<div id="ventana" class="card">
					<div class="card-title" id="cerrar">
						X
					</div>
					<div class="card-content">
						<div class="row log">
					      <div class="row">
					        <center>
					          <img src="../imagenes/logo1.png" alt="" style="width:100%;">
					        </center>
					      </div>
					      <div class="row" style="text-align:left;">
					        <form action="../../WEBAPP/Controller/controller.php" method="POST" id="login">
					            <div class="input-field col m12">
					            	<input type="text" class="validate" id="documento" name="log_doc" required="" maxlength="15" onkeypress="if(event.keyCode<45 || event.keyCode>57)event.returnValue=false;">
					            	<label for="documento" class="text-black">Nº Documento</label>
					            </div>
					            <br>
					            <div class="input-field col m12">
					            	<input type="password" class="validate" id="contrasena" name="log_pass" required="">
					            	<label for="contrasena" class="text-black">Contraseña:</label>
					            </div>
					            <br>
					            <div col m12>
					            	<button type="submit" class="waves-effect waves-light btn orange darken-3" value="INGRESAR" style="height: 60px; width:100%; font-size:18pt;" name="action">INGRESAR</button>
					            </div>
					          </form>
					        </div>
					    </div>
					</div>
				</div>
			</center>
		</div>
		<header id="cabeza">
			<nav class="m12 s12 menu">
					<div class="nav-wrapper  z-depth-1" color="#463f67">
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons fa fa-bars"></i></a>
						<a class="white-text right" id="ingresar" style="cursor:pointer;"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Login</a>
						<ul class="hide-on-med-and-down">
							<li><a href="#cabeza" class="white-text ancla">Inicio</a></li>
							<li><a href="#quienes_son" class="white-text ancla" id="quienes">Quienes Somos</a></li>
							<!-- <li><a href="#slider2" class="black-text">Recomendaciones De Salud</a></li> -->
							<li><a href="#footer" class="white-text ancla">Contactenos</a></li>
							<li ></li>
						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="#cabeza" class="black-text"><i class="fa fa-home"></i>Inicio</a></li>
							<li><a href="#quienes_son" class="black-text"><i class="fa fa-users"></i>Quienes Somos</a></li>
							<!-- <li><a href="#slider2" class="black-text"><i class="fa fa-comments"></i>Recomendaciones</a></li> -->
							<li><a href="#contactar" class="black-text"><i class="fa fa-envelope"></i>Contactenos</a></li>
							<li><a href="login.php" class="black-text">Ingresar</a></li>
						</ul>
					</div>
				</nav>
<!-- baner -->
			<div class="row">
				<div class="col s12 m12" >
					<div class="slider fullscreen">
						 <ul class="slides">
							 <li>
								 <img src="../imagenes/publicidad1.jpg"> <!-- random image -->
								 <div class="caption left-align" id="public">
									 <br>
									 <h3 class="black-text ">LLeva Tu Rutina De Ejercicios</h3>
									 <h4 class="black-text">En Tu Celular, Sin Necesidad De Descargas.</h5>
								 </div>
							 </li>
							 <li>
								 <img src="../imagenes/publicidad2.jpg"> <!-- random image -->
								 <div class="caption left-align">
									 <h3 class="white-text">Las Mejores Rutinas De Ejercicio</h3>
									 <h4  class="white-text">Para tu Cuerpo</h5>
								 </div>
							 </li>
							 <li>
								 <img src="../imagenes/publicidad3.jpg"> <!-- random image -->
								 <div class="caption right-align"><br><br>
									 <h3 class="black-text">Accede Desde Cualquier</h3><br>
									 <h4  class="black-text">Dispositivo Movil u Ordenador</h5>
								 </div>
							 </li>
							 <li>
								 <img src="../imagenes/baner3.jpg"> <!-- random image -->
								 <div class="caption left-align">
									 <h3 class="black-text">Visualiza Tu Rutina</h3>
									 <h4 class="black-text">De Una Manera Mas Rapida</h5>
									 <h4 class="black-text">Y En Todo Momento</h5>
								 </div>
							 </li>
							 <li>
								 <img src="../imagenes/maxresdefault.jpg"> <!-- random image -->
								 <div class="caption left-align">
									 <h3 class="black-text">El Mejor Entrenamiento!</h3>
									 <h5 class="black-text">¡Pruébalo Ahora Por Ti Mismo!</h5>
								 </div>
							 </li>
						 </ul>
					 </div>
				</div>
			</div>

		</header>
<!-- quienes somos -->
		<div class="row">
			<div class="col s12 m12 s12" id="quienes_son">
				<section id="quienes_somos" class="">
						<span><h2>Quienes somos</h2><p>Crossfit life es una aplicación que realiza el ingreso de usuarios al gimnasio<br>
							y registro para usuarios nuevos.<br>
							Administrar rutinas por medio de la web a las que se puede tener<br> acceso desde cualquier
							dispositivo movil u ordenador.</p></span>
						<img src="../imagenes/quienes_somos.jpg" class="responsive-img">

				</section>
			</div>
		</div>
		<div class="footer" id="footer">
			<section id="footer">
				<?php 
					include_once 'footer.php';
				 ?>
		 	</section>
		</div>
	</div>


	<script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/jquery.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="../../WEBAPP/Views/Assets/Plugins/materialize/js/materialize.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
     		$('.slider').slider({full_width: true});
 		});
 		$('#textarea1').trigger('autoresize');
 		$(document).ready(function() {
    		$('input#input_text, textarea#textarea1').characterCounter();
  		});

  		$(document).ready(function(){
  			var altura = $('.menu').offset().top;
  			$(window).on('scroll',function(){
  				if($(window).scrollTop()>altura){
  					$('.menu').addClass('menu-fixed');
  				}else{
  					$('.menu').removeClass('menu-fixed');

  				}
  			})
  		});
  		$(".button-collapse").sideNav();
  		$('nav .ancla').click(function(e){
	e.preventDefault();
	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
});

	</script>
</body>
</html>
