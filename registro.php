<!DOCTYPE html>
<html>
<head>
<title>Registro suitcase</title>

<link rel="icon" href="img/logo.png" type="image/jpg">

<LINK REL=StyleSheet HREF="registrostyle.css"type="text/css">

<LINK REL=StyleSheet HREF="registroestilos.css"type="text/css">

<meta charset="UTF-8">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<body  background="img/fondologin.png">
<center>

<div class="reg"><table>

	<td><!--la tabla es necesaria para que despliegue todo hacia abajo con el div-->
		<br>

	<center><img src="img/logo.png" class="l" alt="logo"></center>





	<h2><center> Registrate gratis </center></h2>


<form method="post" action="registro2.php">

<h5>* minimo 7 caractéres *</h5>
<p><center><input name="n" type="text" placeholder="Nombre de usuario"></p></center>

<p><center><input name="co" type="email" placeholder="Correo electronico"></center></p>

<h5>* minimo 9 caractéres *</h5>
<p><center> <input  name="c" type="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/></center></p>

<p><center><input  name="cc" type="password" placeholder="Confirmar contraseña"></center></p>


<p><input name="a" type="checkbox"><a href="">Acepto terminos y condiciones</a><center></input></center></p></center>

<p><center><input name="p" type="submit" value="Registrarme"></input></center></p>
</form>
</div>

<article>
	<p><h4><a href="ingreso.php">Si ya estas registrado Incia sesión aquí</h4></p></a></article>

</td>
</table>
</center>
</body>
</html>
