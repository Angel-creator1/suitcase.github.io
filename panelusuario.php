<?php
session_start();
error_reporting(0);
if ($_SESSION['usuario'] == '') {

	echo "<h1>Usted no puede ingresar</h1>";
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
	<link rel="stylesheet" type="text/css" href="inicio.css">
</head>
<body>

    <div class="left2">
	 <nav class="men">
			<ul>
				<form method="post" action="conexioncuestionario.php">

				<INPUT TYPE="submit" VALUE="Lectura critica"  name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Matematicas" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Ingles" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Fisica" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Ciencias sociales" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Quimica" name ="tipos"></INPUT>
                <INPUT TYPE="submit" VALUE="Presentar simulacro" name ="tipos"></INPUT>
             
          
	 </nav>		
    </div>

<img src="img/logo.png" class="logo">

	<div id="menu">
		
			<ul class="menu">
				

				<li><a href="">INICIO</a>
				<li><a href="nosotros.html">NOTIFICACIONES</a>
				<li><a href="">CONFIGURACIÓN</a>
				<li><a href="">CUENTA</a>
		                 <ul>
		                 	<li id="userdesplegable"><a href="">mi cuenta</a></li>
                         </ul>
                <li><a href="">CERRAR SESIÓN</a> 
                         <ul>      
                     		<li><a href="salir.php">Si</a></li>
                     		<li><a href="">No</a></li>
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
	<br>
	<br>




	<iframe width="560" height="315" src="https://www.youtube.com/embed/gLPh8J3cbhg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
</body>
</html>