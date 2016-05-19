<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<meta name="Description" content="">
	<meta name="viewport" content="width=400, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link rel="stylesheet" href="../css/style.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,700,900,900italic,700italic,500italic,500,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
	<?php include('menus/menuadmin.php'); ?>
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