<?php
<<<<<<< HEAD

insertado($_POST['Componente'],$_POST['Componentepregunta'],$_POST['contextualizacion'],$_POST['pregunta'],$_POST['opcion1'],$_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4']);


function insertado($Componente,$Componentepregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4)
=======
insertado($_POST['Componentepregunta'],$_POST['contextualizacion'],$_POST['pregunta'],$_POST['opcion1'],$_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4']);


function insertado($Componentepregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4)
>>>>>>> 24c14e93ab0827ad699c65bdc9849a3356351fdc
{

include("conexionbd.php");  
 $con = New Conexion();
<<<<<<< HEAD
$sentencia="insert into cuestionarios values('".$Componente."','".$Componente. $Componentepregunta."','".$Contenido."','".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."')"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

   
     
?>

<script type="text/javascript">
          alert("Cambios guardados");
          window.location.href="registro.php";
          </script>
=======
$sentencia="insert into formularios values('".$Componentepregunta."','".$Contenido."','".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."')"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

?>

<script type="text/javascript">

alert("datos almacenados");
window.location.href=' paneladministrador.php ';
</script>
>>>>>>> 24c14e93ab0827ad699c65bdc9849a3356351fdc
