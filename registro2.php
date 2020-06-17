<?php


insertado($_POST['n'],$_POST['co'],$_POST['c'],$_POST['cc']);

function insertado($NOMBRE_DE_USUARIO,$CORREO_ELECTRONICO,$CONTRASENA,$CONFIRMAR_CONTRASENA)
{

  
    if (strlen($NOMBRE_DE_USUARIO) < 7 || strlen($NOMBRE_DE_USUARIO) > 24){
          echo'<script type="text/javascript">
          alert("Nombre de usuario muy corto o muy largo");
          window.location.href="registro.php";
          </script>';
      }

       else{

        if (strlen($CONTRASENA) < 9) {
          echo'<script type="text/javascript">
          alert("Contraseña muy corta");
          window.location.href="registro.php";
          </script>';
      }
      else{

         if ($CONTRASENA == $CONFIRMAR_CONTRASENA) {

include("conexionbd.php");  
 $con = New Conexion();
$sentencia="insert into registros values('".$NOMBRE_DE_USUARIO."','".$CORREO_ELECTRONICO."','".$CONTRASENA."','".$CONFIRMAR_CONTRASENA."')"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
  echo'<script type="text/javascript">
    alert("Registro exitoso");
    window.location.href="ingreso.php";
    </script>';
} 


        else{
              echo'<script type="text/javascript">
              alert("Contraseñas no coinciden");
              window.location.href="registro.php";
              </script>';
             }



 }
 }
 }
    

	
?>











