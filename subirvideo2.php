<?php

session_start();
$usuario = $_SESSION['usuario'] ;
$link = $_POST['video2'];




include("conexionbd.php");
 $con = New Conexion();
$sentencia="insert into videos_usuarios values('".$usuario."','"."','".$link."')";;
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


if ($resultado) {
  echo '<script>
         alert("Video guardado");
         window.location.href="crearformulario.php";
      </script>';
    }
      else{

        echo "<h2>Error de link</h2>";
      }





?>
