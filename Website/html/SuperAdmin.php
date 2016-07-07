<?php
    session_start();
    if (!isset($_SESSION["codigo_usuario"])) {
      header("Location: index.php");
    }

    if (isset($_GET["S"])) {
       $seccion=$_GET["S"];
    }else{
       $seccion="";
    }
    if (isset($_GET["actividad"])) {
      $actividad=$_GET["actividad"];
    }else{
      $actividad="";
    }
    date_default_timezone_set('America/Bogota');
  	require_once("../../WEBAPP/Model/conexionbd.php");
    require_once("../../WEBAPP/Model/gestiones.php");
    // require_once("../../WEBAPP/Model/gestiones2.php");
    $datosdecita=GestionUsuario::MostrarTodasLasCitas();
    $datosdeplan=GestionUsuario::MostrarTodosLosPlanes();
    $todoslosusuarios=GestionUsuario::MostrarUsuarios();
    $citasdehoy=GestionUsuario::MostrarTodasLasCitasDeHoy();
    $usuarioFrecuente=GestionUsuario::UsuarioFrecuente();
    $usuariosnuevos=GestionUsuario::NuevosUsuariosDeHoy();
    $datosdiagrama=GestionUsuario::DatosDiagrama();
    $acciones=GestionUsuario::ConsultarAcciones();

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

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

  	<link rel="stylesheet" href="../css/style.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,700,900,900italic,700italic,500italic,500,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../WEBAPP/Views/Assets/Plugins/jquery.ptTimeSelect.css">

    <script src="../../WEBAPP/Views/Components/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/jquery.ptTimeSelect.js"></script>

    

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
          selectYears: 50, // Creates a dropdown of 15 years to control year
          format: 'yyyy/mm/dd',
          // firstDay: 5,
          // dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
          // dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
          // monthNames:
          //     ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
          //     "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
          // monthNamesShort:
          //     ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
          //     "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]

        });


    });
    function reloj(){
        var reloj= new Date();
        var hora= reloj.getHours();
        var min= reloj.getMinutes();
        var seg= reloj.getSeconds();
        var actualizar=setTimeout('reloj()',500);
        if(hora<12){
          document.getElementById('hora').innerHTML=hora+" : "
          document.getElementById('min').innerHTML=min+" : "
          document.getElementById('seg').innerHTML=seg+" am";
          if (hora<=9) {
            document.getElementById('hora').innerHTML="0"+hora+" : ";
          }
          if (min<=9) {
            document.getElementById('min').innerHTML="0"+min+" : ";
          }
          if (seg<=9) {
            document.getElementById('seg').innerHTML="0"+seg+" am";
          };
        }else if(hora===12){
          document.getElementById('hora').innerHTML=hora+" : "
          document.getElementById('min').innerHTML=min+" : "
          document.getElementById('seg').innerHTML=seg+" m ";
          if (hora<=9) {
            document.getElementById('hora').innerHTML="0"+hora+" : ";
          }
          if (min<=9) {
            document.getElementById('min').innerHTML="0"+min+" : ";
          }
          if (seg<=9) {
            document.getElementById('seg').innerHTML="0"+seg+" m";
          };
        }else if(hora>12){
          var hora= reloj.getHours()-12;
          document.getElementById('hora').innerHTML=hora+" : "
          document.getElementById('min').innerHTML=min+" : "
          document.getElementById('seg').innerHTML=seg+" pm ";
          if (hora<=9) {
            document.getElementById('hora').innerHTML="0"+hora+" : ";
          }
          if (min<=9) {
            document.getElementById('min').innerHTML="0"+min+" : "
          }
          if (seg<=9) {
            document.getElementById('seg').innerHTML="0"+seg+" pm";
          };
        }
      }


  </script>
</head>
<body onLoad="reloj()">

  <div class="container-fluid ">
    <?php include('menus/menuSadmin.php');?>
    <?php include('../../WEBAPP/Controller/selectorSAcontenido.php');?>
  </div>





</body>
</html>
