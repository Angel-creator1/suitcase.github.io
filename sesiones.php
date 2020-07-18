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
	<title>Mi cuenta suitcase</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<link rel="icon" type="image/jpg" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="estilospagina.css">
	<link rel="stylesheet" href="font/fontello.css">
	<link rel="stylesheet" type="text/css" href="cuestionario.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="left2">
			<h4 id="b"><?php 	echo $usuario; ?> </h4>
		 <center><a href="micuenta.php"><img src="<?php echo $imgper; ?>" class="fp2"></a></center>

	 <nav class="men">
			<ul>
				<form method="post" action="cuestionario.php">

				<INPUT TYPE="submit" VALUE="Lectura critica"  name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Matematicas" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Ingles" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Fisica" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Ciencias sociales" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Quimica" name ="tipos" class="i"></INPUT>
                <INPUT TYPE="submit" VALUE="Presentar simulacro" name ="tipos" class="b"></INPUT>

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
