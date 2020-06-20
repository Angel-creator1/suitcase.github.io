<?php
session_start();
error_reporting(0);
if ($_SESSION['usuario'] == '') {

	echo "<h1>Usted no puede. ingresar</h1>";
	die();
}



?>


<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicio suitcase</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<link rel="icon" type="image/jpg" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="estilospagina.css">
	<link rel="stylesheet" href="font/fontello.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="left2">
			<h4 id="b"><?php echo $_SESSION['usuario'] ?> </h4>
		 <center><a href="micuenta.php"><img src="img/user2.png" id="user"></a></center>

	 <nav class="men">
			<ul>
				<form method="post" action="cuestionario.php">

				<INPUT TYPE="submit" VALUE="Lectura critica"  name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Matematicas" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Ingles" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Fisica" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Ciencias sociales" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Quimica" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Presentar simulacro" name ="tipos" id="simulacro"></INPUT>

 </form>
	 </nav>
    </div>

		<header>

			<div class="contenedor">

				<h1 class="s"><img src="img/logo.png">SUITCASE</h1>
				<input type="checkbox" id="menu-bar">
				<label class="icon-menu"for="menu-bar"></label>
				<nav class="menu">
					<a href="panelusuario.php">INICIO</a>
					<a href="micuenta.php">MI CUENTA</a>
					<a href="crearformulario.php">CREAR</a>
					<a href="notificaciones.php"><img src="img/not.svg" class="not"></a>
				  <a href="salir.php">SALIR</a>
				</nav>

			</div>
		</header>
	  <br>


	<nav class="principal">

		<br>
		<h3>&nbsp&nbsp&nbspNuevos VIDEOS que te podrian interesar:</h3>
		<br>

		&nbsp&nbsp&nbsp&nbsp&nbsp<iframe width="270" height="178" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="270" height="178" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="270" height="178" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="270" height="178" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


				<br>
				<br>
				<h3>Cuestionarios que te peden interesar:</h3>










	</nav>









</body>
</html>
