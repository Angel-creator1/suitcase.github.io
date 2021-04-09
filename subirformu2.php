<?php

session_start();

 $usuario = $_SESSION['usuario'] ;

error_reporting( 'WARNING');


 insertado($usuario,$_POST['id'],$_POST['nombrecues'],$_POST['numpregunta'],$_POST['contextualizacion2'],$_POST['pregunta2'],$_POST['opcion1'],
 $_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4'],$_FILES['imagenc'],$_FILES['imagenp'],$_POST['video'],$_POST['numpreguntas'],$_POST['pass']);




  function insertado($usuario,$id,$Componente,$numpregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4,$archivo,$archivo2,$video,$numquestions,$password){

$ruta = "usuarios/$usuario/Cuestionarios/";
$archivo = $ruta.$_FILES['imagenc']['name'];
move_uploaded_file($_FILES['imagenc']['tmp_name'],$archivo);
$crear = mkdir($ruta, 0777, true);

if ($crear == false) {
  mkdir($ruta, 0777, true);
}
else {
mkdir($ruta, 0777, true);
}


$ruta2 = "usuarios/$usuario/Cuestionarios/";
$archivo2 = $ruta2.$_FILES['imagenp']['name'];
move_uploaded_file($_FILES['imagenp']['tmp_name'],$archivo2);
$crear2 = mkdir($ruta2, 0777, true);
if ($crear2 == false) {
  mkdir($ruta2, 0777, true);

}
else {
mkdir($ruta2, 0777, true);

}

$idd = $usuario.$id.$Componente;
$primary = $idd.$numpregunta;

$conexion = mysqli_connect("localhost","root","","suitcase");

$consulta="SELECT * FROM cuestionarios_usuarios WHERE organizacion='$primary' and Nombre_usuario='$usuario'";
$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
if ($filas>0) {
  include("conexionbd.php");

   $con = New Conexion();

  $sentencia3="UPDATE cuestionarios_usuarios SET
  Contextualizacion = '$Contenido',
  pregunta = '$Pregunta',
  opcion1 = '$opcion1',
  opcion2 = '$opcion2',
  opcion3 = '$opcion3',
  opcion4 = '$opcion4',
  imagen = '$archivo',
  imagen2 = '$archivo2',
  link_video = '$video',
  numero_preguntas = '$numquestions'
  WHERE organizacion = '$primary'";
 $resultado9 = mysqli_query($conexion,$sentencia3);


if ($resultado9) {

     echo ' <script>
              alert("CAMBIOS guardados");
              window.location.href="subirformu.php";
           </script>';
}
           else {
             echo "error de datos, por  cambiar caracteres desconocidos";
           }

}
    else {



if (strlen($idd) > 60) {
  echo "<h1>Id muy larga por favor cambiar</h1>";
}
else{

 include("conexionbd.php");
$con = New Conexion();
 $sentencia="insert into cuestionarios_usuarios values('".$primary."','".$usuario."','".$idd."','".$Componente."','".$numpregunta."','".$Contenido."',
 '".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."','".$archivo."','".$archivo2."','".$video."','".$numquestions."','".$password."')";
 $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


if ($resultado) {
echo ' <script>
         alert("Datos guardados");
         window.location.href="subirformu.php";
      </script>';
}
else {


}
}
}
}
 ?>
