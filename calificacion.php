


  <?php

include 'sesiones.php';
$compo = $_POST['Envia'];
$compo3 = ' segundo intento';
$compo2 = $compo.$compo3;

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
    $nota = 100/10*($num_countries2);


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

  if ($totalrespuestas>10 && $totalrespuestas<12) {
    echo "<h2>Cuestionario finalizado</h2>";
    $notab = $nota-10;
    echo "<h2>Cuestionario finalizado</h2>"; ?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
    echo "<br>";
    echo "<h2> has respondido doble
     en alguna pregunta ten mas cuidado</h2>
     <p>Te recomendamos las siguientes asesorias</p>";




  }
  elseif ($totalrespuestas>12 && $totalrespuestas<14 ) {
     $notab = $nota-22;
     echo "<h2>Cuestionario finalizado</h2>";?>
     <h1 class="nota"><?php echo $notab; ?></h1>
     <?php
     echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
     echo "<br>";
     echo "has respondido doble
      en muchas pregunta ¡ten mucho cuidado!</h2>
      <p>Te recomendamos las siguientes asesorias:</p>";






  }
  elseif ($totalrespuestas>14 && $totalrespuestas<16) {
    $notab = $nota-55;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
    echo "<br>";
    echo "<h2>Parece que no has estado muy antento, has respondido doble en demasiadas preguntas
    <p>Te recomendamos ver las siguientes asesorias</p>";







  }
  elseif ($totalrespuestas>18) {
    $notab = 0;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
    echo "<br>";
    echo "<h2>Parece que no has estado muy antento, has respondido doble en demasiadas preguntas
    <p>Te recomendamos ver las siguientes asesorias</p>";







  }
  elseif ($totalrespuestas<10) {
    $notab = $nota-2;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
    echo "<br>";
    echo "<h2>Te ha faltado responder algunas preguntas</h2
          <h4>Te recomendamos ver las siguientes asesorias</h4>";



  }
  elseif ($totalrespuestas==10) {
    $notab = $nota;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo '<h3 style="color:rgb(1, 34, 252);">Puntaje obtenido</h3>';
    echo "<br>";
    echo "
          <h4>Te recomendamos ver las siguientes asesorias</h4>";

  }
  session_start();
  $conexion = mysqli_connect("localhost","root","","suitcase");
  $consulta2="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario' and Componente='$compo'" ;
  $resultado2=mysqli_query($conexion, $consulta2);



  if ($resultado2) {
  while ($fila2 = $resultado2->fetch_array()) {
  $Componente2 = $fila2['Componente'];
  $puntaje2 = $fila2['puntaje'];
  }
  }
  if (strlen($Componente2)>2) {


          include("conexionbd.php");
           $con = New Conexion();

          $sentencia="insert into puntajes values('".$_SESSION['usuario']."','".$compo2."','".$notab."')";
          $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
        }
else {
  include("conexionbd.php");
   $con = New Conexion();

  $sentencia="insert into puntajes values('".$_SESSION['usuario']."','".$_POST['Envia']."','".$notab."')";
  $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

  ?>

<?php if ($_POST['Envia'] == 'Matematicas') {
  echo '

  <br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/2J3EpDBCXoY"
 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/lzVLS3vRdNA"
 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/jwAlSnDGewo"
  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';

}
else if ($_POST['Envia'] == 'Ingles') {
  echo '

  <br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/l8UrmFyuFas"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/iyD8-1oilzc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/jwAlSnDGewo"
  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';
}
else if ($_POST['Envia'] == 'Lectura critica') {
  echo '

  <br>

<iframe width="560" height="315" src="https://www.youtube.com/embed/zfwNx0vmLNM"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/lM-k2NSazRQ".
 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/_pm_I10AHWQ"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';
}
else if ($_POST['Envia'] == 'Quimica') {
  echo '

  <br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/bg7xhxHCxSA"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/wvjQmvH-GOs"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';
}
else if ($_POST['Envia'] == 'Fisica') {
  echo '

  <br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/YL-90EGOMlU"
 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/ypwlQHuOWSQ"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';
}
else if ($_POST['Envia'] == 'Ciencias sociales') {
  echo '

  <br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/Ld86vngI_qs"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/wgkxVZ5YcBk"
 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/9LMlD7L4Vdk"
  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>';
}
?>



</body>
</html>
