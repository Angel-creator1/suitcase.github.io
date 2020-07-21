


  <?php

include 'sesiones.php';


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
    $nota = 100/40*($num_countries2);


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

  if ($totalrespuestas>40 && $totalrespuestas<42) {
    echo "<h2>Cuestionario finalizado</h2>";
    $notab = $nota-10;
    echo "<h2>Cuestionario finalizado</h2>"; ?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo "<h2>Puntaje obtenido</h2>";
    echo "<br>";
    echo "<h2> has respondido doble
     en alguna pregunta ten mas cuidado</h2>
     <p>Te recomendamos las siguientes asesorias</p>";




  }
  elseif ($totalrespuestas>42 && $totalrespuestas<46 ) {
     $notab = $nota-22;
     echo "<h2>Cuestionario finalizado</h2>";?>
     <h1 class="nota"><?php echo $notab; ?></h1>
     <?php
     echo "<h3>Puntaje obtenido</h3>";
     echo "<br>";
     echo "has respondido doble
      en muchas pregunta ¡ten mucho cuidado!</h2>
      <p>Te recomendamos las siguientes asesorias:</p>";






  }
  elseif ($totalrespuestas>46 && $totalrespuestas<54) {
    $notab = $nota-55;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo "<h3>Puntaje obtenido</h3>";
    echo "<br>";
    echo "<h2>Parece que no has estado muy antento, has respondido doble en demasiadas preguntas
    <p>Te recomendamos ver las siguientes asesorias</p>";







  }
  elseif ($totalrespuestas<40) {
    $notab = $nota-2;
    echo "<h2>Cuestionario finalizado</h2>";?>
    <h1 class="nota"><?php echo $notab; ?></h1>
    <?php
    echo "<h3>Puntaje obtenido</h3>";
    echo "<br>";
    echo "<h2>Te ha faltado responder algunas preguntas</h2
          <h4>Te recomendamos ver las siguientes asesorias</h4>";



  }
  elseif ($totalrespuestas=40) {
    $notab = $nota;


  }

          include("conexionbd.php");
           $con = New Conexion();

          $sentencia="insert into puntajes values('".$_SESSION['usuario']."','".$_POST['Envia']."','".$notab."')";
          $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));


  ?>


  <br>

<img src="img/publicidad/amazon.jpg" class="am">
<img src="img/publicidad/rapi.png" class="rap">
  <iframe width="235" height="133" src="https://www.youtube.com/embed/Q1IjahY52o4" frameborder="0" allow="accelerometer;
  autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <iframe width="235" height="133" src="https://www.youtube.com/embed/ZD1QrIe--_Y" frameborder="0" allow="accelerometer;
   autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <iframe width="235" height="133" src="https://www.youtube.com/embed/_8ZDK_E5p84" frameborder="0" allow="accelerometer;
   autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<img src="img/cocacola.png" style="width:523px;height:170px;">

    <a  class="i2" href="panelusuario.php">Volver al inicio</a>


</nav></center>




</body>
</html>
