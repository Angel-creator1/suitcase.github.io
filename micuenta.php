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
</head>
<body>

    <div class="left2">
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


	 </nav>
    </div>

<img src="img/logo.png" class="logo">

	<div id="menu">

			<ul class="menu">


				<li><a href="panelusuario.php">INICIO</a>
				<li><a href="nosotros.html">NOTIFICACIONES</a>
				<li><a href="">CREAR</a>
				<li><a href="micuenta.php">MI CUENTA</a>
		                 <ul>
		                 	<li id="userdesplegable"><a href="micuenta.php">mi cuenta</a></li>
                         </ul>
                <li><a href="">CERRAR SESIÓN</a>
                         <ul>
                     		<li><a href="salir.php">Cerrar sesión</a></li>
                     		<li><a href="">Cancelar</a></li>
                     	 </ul>

            </ul>

    </div>

		<br>

<h1 class="t">SUITCASE</h1>

	<div class="left">

	    <h4 class="b"><?php echo $_SESSION['usuario'] ?> </h4>
	    <a href=""><img src="img/user2.png" class="user"></a>

    </div>
	<br>
	<br>
	<br>
	<br>
	<center><h2>Mi cuenta</h2></center>
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
	<td><?php $esp = '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'; ?><center><h3>Angel</h3></center></td>
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
	<td colspan="3">
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
