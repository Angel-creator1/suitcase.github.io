<?php

include 'sesiones.php';
$id = $_POST['Envia'];
$conexion = mysqli_connect("localhost","root","","suitcase");

$consulta="SELECT * FROM cuestionarios_usuarios WHERE id_cuestionario='$id'";
$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
if ($filas>0) {
  while ($fila = $resultado->fetch_array()) {
  $num_preguntas = $fila['numero_preguntas'];
  $link = $fila['link_video'];



}
}

mysqli_free_result($resultado);




if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op1'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op1'] as $selected1){

$num_countries1 = count($_POST['op1']);

  }
}
else {
  $num_countries1 = 0;
}
}



if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['c'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['c'] as $selected2){

  $num_countries2 = count($_POST['c']);
  $nota = 100/$num_preguntas * $num_countries2;


  }
}
else {
  $num_countries2 = 0;
  $nota = 0;
}

}


if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op3'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op3'] as $selected3){

$num_countries3 = count($_POST['op3']);






  }
}
else {
  $num_countries3 = 0;
}
}


if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op4'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op4'] as $selected4){

$num_countries4 = count($_POST['op4']);




  }
}
else {
  $num_countries4 = 0;
}
}


echo "<br>";
?>
<center><nav class="cal">
<?php

$totalrespuestas = $num_countries1+$num_countries2+$num_countries3+$num_countries4;

if ($totalrespuestas>$num_preguntas ) {
  $nota3 = $nota-50;
  echo "<h2>Cuestionario finalizado</h2>"; ?>
  <h1 class="nota"><?php echo $nota3; ?></h1>
  <?php
  echo "<h2>Puntaje obtenido</h2>";
  echo "<br>";
  echo "<h2> has respondido doble
   en alguna pregunta ten mas cuidado</h2>
   <p>Te recomendamos las siguientes asesorias</p>";



}
else{

 echo "<h2>Cuestionario finalizado</h2>"; ?>
  <h1 class="nota"><?php echo $nota ; ?></h1>
  <?php
  echo "<h2>Puntaje obtenido</h2>";
  echo "<br>";
  echo "<h2></h2>
   <p>El creador te recomienda los siguientes videos</p>";

}


        include("conexionbd.php");
         $con = New Conexion();

        $sentencia="insert into puntajes_usuarios values('".$_SESSION['usuario']."','".$id."','".$notab."','".$_SESSION['usuario']."')";
        $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));



?>


<br>
<img src="img/publicidad/amazon.jpg" class="am">
<img src="img/publicidad/rapi.png" class="rap">
<a href="<?php echo $link; ?>" class="i2">Link recomendado</a>
<br>
<br>
<br>
<img src="img/cocacola.png" style="width:600px; height:220px;">
<br>
<br>
  <a class="i2" href="panelusuario.php">Volver al inicio</a>



</nav></center>




</body>
</html>
