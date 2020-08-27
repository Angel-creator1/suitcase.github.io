<?php

include 'cues.php';
include 'sesiones.php';
$mecanse = ' segundo intento';
$competencia5 = $competencia.$mecanse;
?>
<nav class="cal">

  <center><h1 class="inicio"><?php echo $competencia; ?></h1></center>
  <br>
  <center><h2>Estos son tus cuestionarios disponibles de <?php echo $competencia; ?> </h2></center>
  <br>
  <center><h2>Elige el que quieras realizar</h2></center>

<center><table>
  <tr>

  <td>
    <h1>Primer intento &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h1>

  </td>
<td>
    <h1>Segundo intento</h1>
</td>
</tr>
<form class="" action="antescuestionario.php" method="post">
<td>
  <?php
        session_start();
        $conexion = mysqli_connect("localhost","root","","suitcase");
        $consulta2="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario' and Componente='$competencia'" ;
        $resultado2=mysqli_query($conexion, $consulta2);



        if ($resultado2) {
        while ($fila2 = $resultado2->fetch_array()) {
        $Componente2 = $fila2['Componente'];
        $puntaje2 = $fila2['puntaje'];
      }
    }

if (strlen($Componente2)>2) {
  echo '<h1 style="color:rgb(255, 14, 14);">No disponible</h1>';
var_dump($competencia5);
}
else {
  echo '<h1><input type="submit" name="tipos2" value="';
  echo $competencia;
  echo '" ';


}

 ?>
    </td>

  <br>

  <td>
    <?php

    $consulta3="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario' and Componente='$competencia5'" ;
    $resultado3=mysqli_query($conexion, $consulta3);



    if ($resultado3) {
    while ($fila3 = $resultado3->fetch_array()) {
    $Componente3 = $fila3['Componente'];
    $puntaje3 = $fila3['puntaje'];
    }
    }


    if (strlen($Componente3)>2) {
    echo '<h1 style="color:rgb(255, 14, 14);">No disponible</h1>';

    }
    else {
    echo '<h1><input type="submit" name="tipos2" value="';
    echo "$competencia" ;
    echo '" ';


    }
    ?>

  </td>
  </tr>
  <br>
<tr>
  <td>
    <?php
    $consulta4="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario' and Componente='$competencia 2'" ;
    $resultado4=mysqli_query($conexion, $consulta4);



    if ($resultado4) {
    while ($fila4 = $resultado4->fetch_array()) {
    $Componente4 = $fila4['Componente'];
    $puntaje4 = $fila4['puntaje'];
    }
    }


    if (strlen($Componente4)>2) {
      echo '<h1 style="color:rgb(255, 14, 14);">No disponible</h1>';
    }
    else {
      echo '<h1><input type="submit" name="tipos2" value="';
      echo "$competencia 2" ;
      echo '" ';

    }
    ?>
  </td>
  <td>
    <?php
    $consulta5="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario' and Componente='$competencia'" ;
    $resultado5=mysqli_query($conexion, $consulta5);



    if ($resultado5) {
    while ($fila5 = $resultado5->fetch_array()) {
    $Componente5 = $fila3['Componente'];
    $puntaje5 = $fila5['puntaje'];
    }
    }


    if (strlen($Componente5)>2) {
    echo '<h1 style="color:rgb(255, 14, 14);">No disponible</h1>';

    }
    else {
      echo '<h1><input type="submit" name="tipos2" value="';
      echo "$competencia 2" ;
      echo '" ';


    }
    ?>
  </td>
</tr>
</form>
</table></center>


</nav>
<div class="ventanapub" id="vent">
<center>  <img src="img/pepsi.jpg" style="width:450px;height:290px;"></center>

  <form action="cuestionario.php" method="post">
<center><input type="submit" value="<?php echo $competencia; ?>" name="tipos" class="i"></input></center>

<center><a href="panelusuario.php" class="vl">Volver</a></center>
</div>
<div class="ventanapub2" id="vent2">
  <center><img src="img/mcdonalds.jpg" style="width:500px;height:290px;"></center>
  <center><a href="javascript:abrire()" style="color: rgb(232, 25, 5);font-size:250%; ">Cerrar</a></center>
</div>
