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
	<br>
	<br>
	<br>
	<br>
	<center><h1 class="c">Mi cuenta</h1></center>
	<br>
	<br>

	<center><table width="60%"  cellspacing="20" cellpadding="20">
   <tr>
  <td>
     <center><h3>Cambiar imagen de perfil</h3></center>

		 <center><svg version="1.1" width="120" height="120" viewBox="0 0 120 120">
   <circle cx="60" cy="60" r="37"
           fill="RoyalBlue" />
 </svg></center>
  </td>
	<td><?php $esp = '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'; ?>
	           <?php echo $esp;
						       echo $esp; ?></td>
	<td>
    <center>
			<h3>Mi Progreso</h3>
			<center><svg version="1.1" width="120" height="120" viewBox="0 0 120 120">
    <circle cx="60" cy="60" r="37"
            fill="RoyalBlue" />
  </svg></center>

		</center>
  </td>
</tr>
<tr></tr>
<center>
	<tr>
	<td colspan="30">
		<h3>Cuestionarios completados</h3>
		<br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
     <br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
     <br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
	</td>
</tr>
</center>
		</table></center>

</nav>





</body>
</html>
