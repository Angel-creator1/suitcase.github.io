
<?php


$competencia = $_POST['tipos'];
$competencia2 = $_POST['tipos2'];

$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta="SELECT * FROM cuestionarios WHERE Componente='$competencia'";
$resultado=mysqli_query($conexion, $consulta);



if ($resultado) {
while ($fila = $resultado->fetch_array()) {
$Competencia_pregunta = $fila['Competencia_pregunta'];
$Contextualizacion = $fila['Contextualizacion'];
$pregunta = $fila['pregunta'];
$opcion1 = $fila['opcion1'];
$opcion2 = $fila['opcion2'];
$opcion3 = $fila['opcion3'];
$opcion4 = $fila['opcion4'];
$imagen = $fila['Imagen'];
$imagen2 = $fila['imagen2'];

}
}
?>
