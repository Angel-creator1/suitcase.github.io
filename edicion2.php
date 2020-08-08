<?php


 insertado($_POST['Componente'],$_POST['Componentepregunta'],$_POST['contextualizacion'],$_POST['pregunta'],$_POST['opcion1'],$_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4'],
 $_FILES['imagen'],$_FILES['imagen2'],$_POST['imagen3']);



  function insertado($Componente,$Componentepregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4,$archivo,$archivo2,$archivo3){

$ruta = 'img/IMGCUESTIONARIOS/';
$archivo = $ruta.$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],$archivo);

$ruta2 = 'img/IMGCUESTIONARIOS/imgpreguntas/';
$archivo2 = $ruta2.$_FILES['imagen2']['name'];
move_uploaded_file($_FILES['imagen2']['tmp_name'],$archivo2);


$primary2 = $Componente.$Componentepregunta;

$conexion1 = mysqli_connect("localhost","root","","suitcase");
$consulta1="SELECT * FROM cuestionarios WHERE Competencia_pregunta='$primary2' and Componente='$Componente'";
$resultado5=mysqli_query($conexion1, $consulta1);


$filas2=mysqli_num_rows($resultado5);
if ($filas2>0) {
  include("conexionbd.php");
 $con2 = New Conexion();


  $sentencia4="UPDATE cuestionarios SET
  Contextualizacion = '$Contenido',
  pregunta = '$Pregunta',
  opcion1 = '$opcion1',
  opcion2 = '$opcion2',
  opcion3 = '$opcion3',
  opcion4 = '$opcion4',
  Imagen = '$archivo',
  imagen2 = '$archivo2',
  video_ayuda = '$archivo3'
  WHERE Competencia_pregunta = '$primary2'";
 $resultado9=$con->query($sentencia4) or die("Error de datos".mysqli_error($con));


 if ($resultado9) {

      echo ' <script>
               alert("CAMBIOS guardados");
               window.location.href="paneladministrador.php";
            </script>';
 }
            else {
                 echo "eeeeeeeeeeeeeeeeeeee";
            }

 }



else {

    include("conexionbd.php");
 $con2 = New Conexion();

 $sentencia="insert into cuestionarios values('".$Componente."','".$primary2."','".$Contenido."',
 '".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."','".$archivo."',
 '".$archivo2."','".$archivo3."')";
 $resultado2=$con2->query($sentencia) or die("Error de datos".mysqli_error($con2));

 if ($resultado2) {

      echo ' <script>
               alert("CAMBIOS guardados");
               window.location.href="paneladministrador.php";
            </script>';
 }
            else {
             echo "error de datos";
            }



 }
}
 ?>
