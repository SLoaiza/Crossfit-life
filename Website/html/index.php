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
</head>
<!--scrolltop fixed jquery-->
<body>
	<div class="container">
		<header id="cabeza">
			<div class="row">
				<div class="col s12 m5">
					<div class="row" id="iconos">
						<div class="col s4 m12">
							<a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/fb.png" alt="" id="redes"></a>
						</div>
						<div class="col s4 m12">
							<a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/tw.png" alt="" id="redes"></a>
						</div>
						<div class="col s4 m12">
							<a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/yt.png" alt="" id="redes"></a>
						</div>
					</div>
				</div>
				<div class="col s12 m6">
					<form action="../../WEBAPP/Controller/controller.php" method="POST" id="login">
						<label for="documento" class="text-black">Nº Documento:</label>
						<input type="text" placeholder="Ingrese numero de documento" id="documento" name="log_doc">
						<br>
						<label for="contrasena" class="text-black">Contraseña:</label>
						<input type="password" placeholder="Ingrese Contraseña" id="contrasena" name="log_pass">
						<input type="submit" class="waves-effect waves-light btn orange darken-3" value="INGRESAR" style="height: 40px;" name="action">
					</form>
				</div>
			</div>
		</header>
		<nav class="z-depth-2 m12 s12 menu">
				<div class="nav-wrapper orange z-depth-2">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons fa fa-bars"></i></a>
					<ul class="hide-on-med-and-down">
						<li><a href="#cabeza" class="black-text">Inicio</a></li>
						<li><a href="#quienes_somos" class="black-text">Quienes Somos</a></li>
						<li><a href="#slider2" class="black-text">Recomendaciones De Salud</a></li>
						<li><a href="#contactar" class="black-text">Contactenos</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="#cabeza" class="black-text"><i class="fa fa-home"></i>Inicio</a></li>
						<li><a href="#quienes_somos" class="black-text"><i class="fa fa-users"></i>Quienes Somos</a></li>
						<li><a href="#slider2" class="black-text"><i class="fa fa-comments"></i>Recomendaciones</a></li>
						<li><a href="#contactar" class="black-text"><i class="fa fa-envelope"></i>Contactenos</a></li>
					</ul>
				</div>
			</nav>
		<div class="row">
			<div class="col s12 m12" >
				<div class="slider">
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
		<div class="row">
			<div class="col s12 m12">
				<section id="quienes_somos" class="card z-depth-2">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="../imagenes/quienes_somos.png" alt="" class="activator">
					</div>
					<div class="card-reveal" id="mostrar_mensaje">
						<span class="card-title white" style="font-size: 48px;" >¿QUIENES SOMOS?</span>
						<p class="white activator">Crossfit life es una aplicacion que realiza un control de ingreso al gimnasio y un registro para usuarios nuevos. Administra las rutinas por medio de la web  a las que se puede tener acceso con algun dispositivo movil o desde cualquier ordenador. </p>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<section class="card-panel z-depth-2">
					<h2 class="white center" >Recomendaciones De Salud</h2>
				<div class="row">
					<article class="col s6 m3 border-right">
						<h4 class="center-align flow-text">CORRER</h4>
						<img src="../imagenes/recomendacion1.jpg" class="responsive-img">
						<p class="justify">Correr en la calle o en una banda caminadora proporciona varios beneficios para la salud, incluyendo la disminución de la presión arterial, una mejor función pulmonar y rendimiento cardiovascular. Sin embargo, de que correr al aire libre tiene una ligera ventaja sobre el uso de la banda caminadora. Con base en un estudio publicado en el Diario de Psicología, la resistencia del viento y la necesidad de recorrer las curvas y vueltas en la calle causa que el corredor gaste más energía al aire libre que cuando corre en una banda caminadora.</p>
					</article>
					<article class="col s6 m3 border-right">
						<h4 class="center-align flow-text">PESO</h4>
						<img src="../imagenes/recomendacion2.jpg" class="responsive-img">
						<p class="justify">Primero, necesitas determinar cuál es tu objetivo. En el caso de que sea aumentar la resistencia, deberías realizar entre 12 y 20 repeticiones. Si lo que quieres es incrementar la fuerza o la potencia de explosión, debes reducir el número de repeticiones (entre 1 y 8 ) y aumentar la carga. Una vez definido el objetivo, solo tienes que comprobar cuál es la carga que te permite finalizar las repeticiones manteniendo la tensión en los últimos movimientos. Si las 2 últimas repeticiones no te son difíciles de completar, es porque aún puedes aumentar más la carga.</p>
					</article>
					<article class="col s6 m3 border-right">
						<h4 class="center-align flow-text">DIETA</h4>
						<img src="../imagenes/recomendacion3.jpg" class="responsive-img">
						<p class="justify">Bajar de peso, aumentar masa muscular, tonificar o simplemente tener un momento de recreación son los incentivos más comunes de aquellos que deciden asistir a un gimnasio, trotar en el parque o montar en bicicleta. Pero, aunque todas estas motivaciones son válidas, si se quiere resultados es indispensable una dieta específica. Los que quieren sólo un momento de esparcimiento, no deben tener tantas restricciones en cuanto a la alimentación,aunque ésta sí debe ser balanceada</p>
					</article>
					<article class="col s6 m3 ">
						<h4 class="center-align flow-text" >CALENTAMIENTO</h4>
						<img src="../imagenes/recomendacion4.jpg" class="responsive-img">
						<p class="justify">Bajar de peso, aumentar masa muscular, tonificar o simplemente tener un momento de recreaciónson los incentivos más comunes de aquellos que deciden asistir a un gimnasio, trotar en el parque o montar en bicicleta.Pero, aunque todas estas motivaciones son válidas, si se quiere resultados es indispensable una dieta específica.	Los que quieren sólo un momento de esparcimiento, no deben tener tantas restricciones en cuanto a la alimentación,aunque ésta sí debe ser balanceada</p>
					</article>
				</div>
			</section>
		</div>
		<div class="row">
			<div class="col s12 m6">
				<img src="../imagenes/logo.png" alt="" id="logocont" class="responsive-img">
				<section id="contactar">
					<p style="font-size: 19px;">
						Contacte con el departamento de atención al cliente de Crossfit Life, para cualquier duda que tenga o para cualquier aclaración que necesite.
					</p>
					<br>
					<p style="font-size: 19px;">
						Correo electrónico:
					</p>
					<br>
					<p style="font-size: 19px;">
						Teléfono:
					</p>
				</section>
				<br><br>
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
							<input type="button" class="col s12 m4waves-effect waves-light btn orange darken-3" value="Enviar" style="height: 40px;" id="enviar">
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
	</script>
</body>
</html>