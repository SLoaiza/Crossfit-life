<?php
    if (isset($_GET["seccion"])) {
       $seccion=$_GET["seccion"];
    }else{
       $seccion="";
    }
  	require_once("../../WEBAPP/Model/conexionbd.php");
  	require_once("../../WEBAPP/Model/gestiones.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<meta name="Description" content="">
	<meta name="viewport" content="width=400, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  	<link rel="stylesheet" href="../css/style.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,700,900,900italic,700italic,500italic,500,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".dropdown-button").dropdown();
        $('#textarea1').trigger('autoresize');
        $('input#input_text, textarea#textarea1').characterCounter();
        var altura = $('.menu').offset().top;
        $(window).on('scroll',function(){
          if($(window).scrollTop()>altura){
            $('.menu').addClass('menu-fixed');
          }else{
            $('.menu').removeClass('menu-fixed');

          }
        })
        $(".button-collapse").sideNav();
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
        $('#citas').DataTable();
    });


  </script>
</head>
<body>

  <div class="container-fluid ">
    <?php include('menus/menuSadmin.php');?>
    <?php include('../../WEBAPP/Controller/selectorSAcontenido.php');?>
  </div>





</body>
</html>
