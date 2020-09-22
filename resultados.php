<?php

include 'sesiones.php';


 ?>


 <nav class="principal">
<h1 class="c">Resultados</h1>
<?php

$id5 = $_POST['buscarr'];
$complemento = 'pregunta 1';
$idfinal = $id5.$complemento;
session_start();
$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta2="SELECT * FROM cuestionarios_usuarios WHERE organizacion ='$idfinal' or Nombre_usuario ='$id5' or nombre_cuestionario ='$id5'";
$resultado2=mysqli_query($conexion, $consulta2);



if ($resultado2) {
while ($fila2 = $resultado2->fetch_array()) {
$creador = $fila2['Nombre_usuario'];
$id7 = $fila2['id_cuestionario'];
$nombrecues = $fila2['nombre_cuestionario'];
$password = $fila2['password'];

 ?>

<div class="a3">

  <h4>Id cuestionario:</h4>
  <h4 class="busque"><?php echo $id7;  ?></h4>
  <br>
  <h4>Nombre cuestionario:</h4>
    <h4 class="busque">&nbsp<?php echo $nombrecues; ?></h4>
  <br>
  <h4>Nombre creador:
    <h4 class="busque">&nbsp<?php echo $creador; ?></h4>
    <form class="" action="realizarcuestionario.php" method="post">
    <?php

    if (strlen($password)>0) {
      echo '<input type="text" name="pass" placeholder="digitar contraseña de cuestionario"></input>';
    }
    else {

    }

     ?>

    <input type="submit" name="realizar" value="<?php echo $id7; ?>" class="sf3"></input>
  </form>
</div>
<br>
<br>


 </nav>
<?php

              }
                              }
 ?>
