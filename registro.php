<!DOCTYPE html>
<html>
<head>

        <title>Registro suitcase</title>

        <link rel="icon" href="img/logo.png" type="image/jpg">
        <LINK REL=StyleSheet HREF="registrostyle.css"type="text/css">
        <LINK REL=StyleSheet HREF="estilospagina.css"type="text/css">


        <meta charset="UTF-8">

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


<br><br><br><br>


<div class="reg">

<center>

    <h2> Registrate gratis </h2>

	<img src="img/logo.png">

    <br><br>
   <form method="post" action="registro2.php">


    <h5>* minimo 7 caractéres *</h5>


    <input name="n" type="text" placeholder="Nombre de usuario">

    <input name="co" type="email" placeholder="Correo electronico">


    <h5>* minimo 9 caractéres *</h5>


    <input  name="c" type="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>

    <input  name="cc" type="password" placeholder="Confirmar contraseña">
 
    <br><br>

    <input name="a" type="checkbox" value="si"><a href=""> Acepto terminos y condiciones </a></input>

    <br><br>

    <input name="p" type="submit" value="Registrarme"></input>


    </form>
     
	<h4><a href="ingreso.php">Si ya estas registrado Incia sesión aquí</h4></a>

    </center>

    </div>

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="pie">

  
<br><br><br>
	<h4 class="lpie">Eduplays</h4>

	<center><h5 class="lpie">Derechos reservados de Suitcase</h5></center>
	<center><h4 class="lpie">Telefono: 3203765372</h4></center>
	
	<center><img src="img/redes.jpg" alt="imagen de Facebook, twitter, Instagram" class="redes"></center>

</body>
</div>

</html>
