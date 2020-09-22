<?php

include("conexionbd.php");
$id = $_POST['id'];
$con = New Conexion();
$sentencia = "DELETE from cuestionarios_usuarios where id_cuestionario='$id'";
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


if ($resultado) {
echo ' <script>
        alert("Cuestionario eliminado");
        window.location.href="crearformulario.php";
     </script>';
}
else {
echo "xddd";

}

 ?>
