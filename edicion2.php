<?php



 insertado($_POST['Componente'],$_POST['Componentepregunta'],$_POST['contextualizacion'],$_POST['pregunta'],$_POST['opcion1'],$_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4'],
 $_FILES['imagen'],$_FILES['imagen2'],$_FILES['imagen3'],$_FILES['imagen4'],$_FILES['imagen5'],$_FILES['imagen6']);



  function insertado($Componente,$Componentepregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4,$archivo,$archivo2,$archivo3,$archivo4,$archivo5,$archivo6){

$ruta = 'img/IMGCUESTIONARIOS/';
$archivo = $ruta.$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],$archivo);

$ruta2 = 'img/IMGCUESTIONARIOS/imgpreguntas/';
$archivo2 = $ruta2.$_FILES['imagen2']['name'];
move_uploaded_file($_FILES['imagen2']['tmp_name'],$archivo2);

$ruta3 = 'img/IMGCUESTIONARIOS/imgopcion1/';
$archivo3 = $ruta3.$_FILES['imagen3']['name'];
move_uploaded_file($_FILES['imagen3']['tmp_name'],$archivo3);

$ruta4 = 'img/IMGCUESTIONARIOS/imgopcion2/';
$archivo4 = $ruta4.$_FILES['imagen4']['name'];
move_uploaded_file($_FILES['imagen4']['tmp_name'],$archivo4);

$ruta5 = 'img/IMGCUESTIONARIOS/imgopcion3/';
$archivo5 = $ruta5.$_FILES['imagen5']['name'];
move_uploaded_file($_FILES['imagen5']['tmp_name'],$archivo5);

$ruta6 = 'img/IMGCUESTIONARIOS/imgopcion4/';
$archivo6 = $ruta6.$_FILES['imagen6']['name'];
move_uploaded_file($_FILES['imagen6']['tmp_name'],$archivo6);








 include("conexionbd.php");
  $con = New Conexion();
 $sentencia="insert into cuestionarios values('".$Componente."','".$Componente. $Componentepregunta."','".$Contenido."',
 '".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."','".$archivo."',
 '".$archivo2."','".$archivo3."','".$archivo4."','".$archivo5."','".$archivo6."')";
 $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


 }

 ?>


 <script type="text/javascript">

 alert('datos almacenados');
 window.location.href="paneladministrador.php";

 </script>
