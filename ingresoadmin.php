<!DOCTYPE html>
<html>
<head>
	
      <LINK REL=StyleSheet HREF="ingrecito.css"type="text/css">
      <LINK REL=StyleSheet HREF="estilospagina.css"type="text/css">
      

      <meta charset="UTF-8">

      <title>Ingreso suitcase</title>
      <link rel="icon" href="img/logo.png" type="image/jpg">

 </head>

<header>

	<div class="contenedor">

			<h1 class="s"><img src="img/logo.png">SUITCASE</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu"for="menu-bar"></label>
			<nav class="menu">

				<a href="pagina.html">INICIO</a>
				<a href="ingreso.php">INGRESAR</a>
		    <a href="registro.php">REGISTRO</a>
			</nav>

		</div>

</header>

<body>	

<br><br><br><br><br><br>

<div class="reg">

	<center>
    <h2> Iniciar sesión como administrador </h2>

	<img src="img/user.jpg" class="user">	
			
	<br>

    <form method="POST" action="conexionadministrador.php">

    <input name="usuario" type="text" placeholder="Correo electronico o Nombre de usuario"></input>

    <input name="contrasena" type="password" placeholder="Contraseña"></input>
    <br><br>

    <input name="p" type="submit" value="Iniciar sesión"></input>

    </form>



	<p><h4><a href="registro.php">Si no te has registrado haz click aquí</h4></p></a>

    </center>

</div>

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="pie">

  
<br><br><br>
	<h4 class="lpie">Eduplays</h4>

	<center><h5 class="lpie">Derechos reservados de Suitcase</h5></center>
	<center><h4 class="lpie">Telefono: 3203765372</h4></center>
	
	<center><img src="img/redes.jpg" alt="imagen de Facebook, twitter, Instagram" class="redes"></center>

</body>
</div>

</html>