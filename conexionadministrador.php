<?php
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['contrasena'];
$conexion = mysqli_connect("localhost","root","","suitcase");


$consulta="SELECT * FROM admin WHERE nombre='$usuario' and contrasena='$clave'";


$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
if ($filas>0) {

	$_SESSION['usuario'] = $usuario;
   header("location:paneladministrador.php");
}
    else {
    	
    	echo "Usuario o contraseña incorrectos";
    	
    }
    
mysqli_free_result($resultado);
mysqli_close($conexion);



 ?>