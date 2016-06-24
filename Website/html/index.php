<?php
	require_once("../../WEBAPP/Model/conexionbd.php");
	require_once("../../WEBAPP/Model/gestiones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crossfit Life</title>
	<meta name="Description" content="">
	<meta name="viewport" content="width=400, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link rel="stylesheet" href="../css/style.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,700,900,900italic,700italic,500italic,500,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		
	</script>
	

</head>
<!--scrolltop fixed jquery-->
<!-- menú -->
<body>
	<div class="container-fluid">
		<header id="cabeza">
			<nav class="m12 s12 menu">
					<div class="nav-wrapper orange z-depth-2">
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons fa fa-bars"></i></a>
						<ul class="hide-on-med-and-down">
							<li><a href="#cabeza" class="black-text">Inicio</a></li>
							<li><a href="#quienes_somos" class="black-text" id="quienes">Quienes Somos</a></li>
							<!-- <li><a href="#slider2" class="black-text">Recomendaciones De Salud</a></li> -->
							<li><a href="#contactar" class="black-text">Contactenos</a></li>
							<li><a href="#login" class="black-text">Ingresar</a></li>
						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="#cabeza" class="black-text"><i class="fa fa-home"></i>Inicio</a></li>
							<li><a href="#quienes_somos" class="black-text"><i class="fa fa-users"></i>Quienes Somos</a></li>
							<!-- <li><a href="#slider2" class="black-text"><i class="fa fa-comments"></i>Recomendaciones</a></li> -->
							<li><a href="#contactar" class="black-text"><i class="fa fa-envelope"></i>Contactenos</a></li>
							<li><a href="#login" class="black-text">Ingresar</a></li>
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
								 <img src="../imagenes/publicidad4.jpg"> <!-- random image -->
								 <div class="caption left-align">
									 <h3 class="white-text">Visualiza Tu Rutina</h3>
									 <h4 class="white-text">De Una Manera Mas Rapida</h5>
									 <h4 class="white-text">Y En Todo Momento</h5>
								 </div>
							 </li>
							 <li>
								 <img src="../imagenes/publicidad5.jpg"> <!-- random image -->
								 <div class="caption left-align">
									 <h3 class="white-text">El Mejor Entrenamiento!</h3>
									 <h5 class="white-text">¡Pruébalo Ahora Por Ti Mismo!</h5>
								 </div>
							 </li>
						 </ul>
					 </div>
				</div>
			</div>

		</header>
<!-- quienes somos -->
		<div class="row">
			<div class="col s12 m12" id="quines">
				<section id="quienes_somos" class="">
					<div class="card-image ">
						<img src="../imagenes/quienes_somos.png" alt="">
					</div>
				</section>
			</div>
		</div>
<!-- contactenos -->
		<div class="row">
			<div class="col s12 m6" id="nosotros">
				<img src="../imagenes/logo.png" alt="" id="logocont" class="responsive-img">
				<section id="contactar">
					<p style="font-size: 19px;">
						Contacte con el departamento de atención al cliente de Crossfit Life, para cualquier duda que tenga o para cualquier aclaración que necesite.
					</p>
					<p style="font-size: 19px;">
						Correo electrónico:
					</p>
					<p style="font-size: 19px;">
						Teléfono:
					</p>
				</section>
				<br>
				<section id="redescont">
					<a href="#" class="btn-floating btn-large" id="btn_fb2"><img src="../imagenes/fb.png" alt="" id="redes"></a>
					<a href="#" class="btn-floating btn-large" id="btn_fb2"><img src="../imagenes/tw.png" alt="" id="redes"></a>
					<a href="#" class="btn-floating btn-large" id="btn_fb2"><img src="../imagenes/yt.png" alt="" id="redes"></a>
				</section>
			</div>
			<div class="col s12 m6">
					<section id="contacto" class="card z-depth-2 row">
						<h4 class="center-align" id="titulo">Contactenos</h4>
						<form action="POST" id="contactenos">
							<label for="identidad" class="white col s12 m12">Nombres:</label>
							<input type="text" class="col s12 m12" placeholder="Ingrese nombres y apellidos" id="identidad">
							<label for="correo" class="white col s12 m12">Email:</label>
							<input type="text" class="col s12 m12" placeholder="Ingrese correo electronico" id="correo">
							<br>
							<div class="input-field col s12">
					          <textarea id="textarea1" length="500" class="materialize-textarea" maxlength="500"></textarea>
					          <label for="textarea1" >Mensaje</label>
					        </div>
							<input type="button" class="col s12 m4waves-effect waves-light btn orange darken-3" value="Enviar" style="height: 40px; width: 120px;" id="enviar">
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

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
  		$('nav a').click(function(e){
	e.preventDefault();
	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
});

	</script>
</body>
</html>
