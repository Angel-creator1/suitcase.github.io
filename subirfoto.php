<?php

session_start();
 $usuario = $_SESSION['usuario'] ;

error_reporting( 'WARNING');

$ruta = "usuarios/$usuario/fotodeperfil/";
$foto = $ruta.$_FILES['subirfoto']['name'];
move_uploaded_file($_FILES['subirfoto']['tmp_name'],$foto);

$crear = mkdir($ruta, 0777, true);

if ($crear == false) {
  mkdir($ruta, 0777, true);
}
else {
mkdir($ruta, 0777, true);
}



include("conexionbd.php");
 $con = New Conexion();
$sentencia="UPDATE `registros` SET `Foto_de_perfil` = '$foto' WHERE `registros`.`NOMBRE_DE_USUARIO` = '$usuario'";
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


if ($resultado) {
  echo '<script>
         alert("Imagen guardada");
         window.location.href="micuenta.php";
      </script>';
    }
      else{

        echo "<h2>Error de imagen</h2>";
      }





?>
