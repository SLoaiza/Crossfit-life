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
					          <img src="../imagenes/logo1.png" alt="" style="width:400px;height:200px;">
					        </center>
					      </div>
					      <div class="row" style="text-align:left;">
					        <div class="col s12 m12">
					          <form action="../../WEBAPP/Controller/controller.php" method="POST" id="login">
					            <label for="documento" class="text-black">Nº Documento:</label>
					            <input type="text" placeholder="Ingrese numero de documento" id="documento" name="log_doc" required="" maxlength="15" onkeypress="if(event.keyCode<45 || event.keyCode>57)event.returnValue=false;">
					            <br>
					            <label for="contrasena" class="text-black">Contraseña:</label>
					            <input type="password" placeholder="Ingrese Contraseña" id="contrasena" name="log_pass" required="">
					            <button type="submit" class="waves-effect waves-light btn orange darken-3" value="INGRESAR" style="height: 40px;" name="action">INGRESAR</button>
					          </form>
					        </div>
					      </div>
					      <div class="col s12 m12">
					        <div class="row" id="iconos">
					          <center>
					            <div class="col s4 m1 offset-m2">
					              <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/fb.png" alt="" id="redes"></a>
					            </div>
					            <div class="col s4 m1 offset-m2">
					              <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/tw.png" alt="" id="redes"></a>
					            </div>
					            <div class="col s4 m1 offset-m2">
					              <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/yt.png" alt="" id="redes"></a>
					            </div>
					          </center>
					        </div>
					      </div>
					    </div>
					</div>
				</div>
			</center>
		</div>
		<header id="cabeza">
			<nav class="m12 s12 menu">
					<div class="nav-wrapper  z-depth-2" color="#424242">
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons fa fa-bars"></i></a>
						<ul class="hide-on-med-and-down">
							<li><a href="#cabeza" class="white-text ancla">Inicio</a></li>
							<li><a href="#quienes_somos" class="white-text ancla" id="quienes">Quienes Somos</a></li>
							<!-- <li><a href="#slider2" class="black-text">Recomendaciones De Salud</a></li> -->
							<li><a href="#contactar" class="white-text ancla">Contactenos</a></li>
							<li id="ingresar"><a class="white-text"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Ingresar</a></li>
						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="#cabeza" class="black-text"><i class="fa fa-home"></i>Inicio</a></li>
							<li><a href="#quienes_somos" class="black-text"><i class="fa fa-users"></i>Quienes Somos</a></li>
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
			<div class="col s12 m12" id="quines">
				<section id="quienes_somos" class="">
					<div class="card-image ">
						<img src="../imagenes/quienes_somos.png" class="responsive-img">
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
  		$('nav .ancla').click(function(e){
	e.preventDefault();
	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
});

	</script>
</body>
</html>
