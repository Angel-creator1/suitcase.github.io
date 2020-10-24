<?php

session_start();
error_reporting(0);
if ($_SESSION['usuario'] == '') {

	echo "<h1>Usted no puede. ingresar</h1>";
	die();
}
 $usuario = $_SESSION['usuario'];




$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta="SELECT * FROM registros WHERE NOMBRE_DE_USUARIO='$usuario'";
$resultado=mysqli_query($conexion, $consulta);



if ($resultado) {
while ($fila = $resultado->fetch_array()) {

$imgper = $fila['Foto_de_perfil'];

}
}


?>


<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Suitcase</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<link rel="icon" type="image/jpg" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="estilospagina.css">
	<link rel="stylesheet" href="font/fontello.css">
	<link rel="stylesheet" type="text/css" href="cuestionario.css">
	<link rel="stylesheet" type="text/css" href="panel.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="left2">
			<h4 id="b"><?php 	echo $usuario; ?> </h4>
		 <center><a href="micuenta.php"><div class="fp2" style="<?php
		 if (strlen($imgper) < 5  ) {
		 	echo "background-image: url(img/user2.png)";
		 }
		 else{
			 echo "background-image: url('$imgper')";
		 }
			?>
		    "></div></a></center>

	 <nav class="men">

				<form method="post" action="antescuestionario2.php">

				<INPUT TYPE="submit" VALUE="Lectura critica"  name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Matematicas" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Ingles" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Fisica" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Ciencias sociales" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Quimica" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Presentar simulacro" name ="tipos" class="b1"></INPUT>

 </form>
	 </nav>
    </div>

		<header>

			<div class="contenedor">
<nav class="menu">
				<img src="img/logo.png"><h1 class="s">SUITCASE</h1>
				<input type="checkbox" id="menu-bar">
				<label class="icon-menu"for="menu-bar"></label>


					<img src="img/buscador.png" style="height:28px;width:32px;">
					<form class="" action="resultados.php" method="post" style="width:400px;">
						<input type="text" name="buscarr" placeholder="Buscar id cuestionario o nombre de usuario"></input>
						<input type="submit" name="buscar" value="buscar" class="sf2"></input>
					</form>
					<a href="panelusuario.php">INICIO</a>
					<a href="micuenta.php">MI CUENTA</a>
					<a href="crearformulario.php">CREAR</a>
					<a href="notificaciones.php"><img src="img/not.svg" class="not"></a>
				  <a href="salir.php">SALIR</a>
				</nav>

			</div>
		</header>

		<br>
<br>
<br>

		<div class="pie">


		<br><br><br>

			<h4 class="lpie">Eduplays</h4>
			<center><h5 class="lpie">Derechos reservados de Suitcase</h5></center>
			<center><h4 class="lpie">Telefono: 3203765372</h4></center>

			<center><img src="img/redes.jpg" alt="imagen de Facebook, twitter, Instagram" class="redes"></center>

		</div>
