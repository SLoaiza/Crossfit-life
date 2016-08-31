<?php 
	session_start();
	if (isset($_GET["S"])) {
       $seccion=$_GET["S"];
    }else{
       $seccion="";
    }
    date_default_timezone_set('America/Bogota');
    require_once("../../WEBAPP/Model/conexionbd.php");
    require_once("../../WEBAPP/Model/gestionesdeusuario.php");

    $Vlrcion=GestionesDeUsuario::VerVlrcion($_SESSION["codigo_usuario"]);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
    <link rel="stylesheet" href="../../WEBAPP/Views/Assets/Plugins/sweetalert.css">

    <script src="../../WEBAPP/Views/Components/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/jquery.ptTimeSelect.js"></script>
    <script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/sweetalert.min.js"></script>
</head>
<body>
	<?php include('menus/menuUsuario.php');?>
    <?php include('../../WEBAPP/Controller/selectorUscontenido.php');?>
</body>
</html>