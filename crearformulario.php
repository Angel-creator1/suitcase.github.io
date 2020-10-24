<?php include 'sesiones.php' ?>

    	<nav class="principal2">

    		<br>
        <div class="misvideos">


    		<br>
<button class="video"><a href="subirvideo.php" class="s">Subir video<a></button>
  <br>
  <?php


  $consulta3="SELECT * FROM videos_usuarios WHERE Nombre_usuario='$usuario'";
    $resultado3=mysqli_query($conexion, $consulta3);



    if ($resultado3) {
    while ($fila3 = $resultado3->fetch_array()) {
    $video = $fila3['link']; ?>

  <h2>&nbsp&nbsp&nbspMis Videos</h2>
    		&nbsp&nbsp&nbsp <?php echo $video; ?>
        <?php

        }
        }
         ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>

      <div class="miscuestionarios">
            <button class="video"><a href="subirformu.php" class="s">Subir o editar Cuestionario<a></button>
              <br>
              <h2>&nbsp&nbsp&nbsp&nbspMis Cuestionarios:</h2>
              <img src="img/buscador.png" style="height:28px;width:32px;">
              <form class="" action="resultados.php" method="post" style="width:400px;">
                <input type="text" name="buscarr" placeholder="Buscar en mis cuestionarios"></input>
                <input type="submit" name="buscar" value="buscar" class="sf2"></input>
              </form>
              <?php


           					session_start();
           					$conexion = mysqli_connect("localhost","root","","suitcase");
           					$consulta2="SELECT * FROM cuestionarios_usuarios WHERE Nombre_usuario='$usuario'";
           					$resultado2=mysqli_query($conexion, $consulta2);



           					if ($resultado2) {
           					while ($fila2 = $resultado2->fetch_array()) {
           					$idcues = $fila2['id_cuestionario'];
           					$nom_cues2 = $fila2['nombre_cuestionario'];
}
}
$primary = 'pregunta 1';
$idcues2 = $idcues.$primary;

$consulta3="SELECT * FROM cuestionarios_usuarios WHERE numero_pregunta='$primary' and Nombre_usuario='$usuario'";
$resultado3=mysqli_query($conexion, $consulta3);
if ($resultado3) {
while ($fila3 = $resultado3->fetch_array()) {
$idcues3 = $fila3['id_cuestionario'];
$nom_cues = $fila3['nombre_cuestionario'];

            ?>

<br>
           		<div class="a2">
           			<br>
           			<h4>Id cuestionario:</h4>
                <h4><?php echo $idcues3;  ?></h4>
                <br>
                <h4>Nombre cuestionario:&nbsp<?php echo $nom_cues; ?></h4>

<form class="" action="micuestio.php" method="post">
  <h3 style="color:rgb(3, 126, 19);">Ver mi cuestionario:</h3><input type="submit" name="mi" value="<?php echo $idcues3;  ?>" class="misc"></input>

</form>
<form class="" action="quienes.php" method="post">
  <h3 style="color:rgb(106, 15, 94);">Quienes han llenado mi cuestionario:</h3><input type="submit" name="mi" value="<?php echo $idcues3;  ?>" class="misc"></input>

</form>
<form class="" action="llenarp.php" method="post">
  <h3 style="color:rgb(4, 25, 80);">Llenar preguntas</h3><input type="submit" name="id" value="<?php echo $idcues3;  ?>" class="misc"></input>

</form>
<form class="" action="eliminarcues.php" method="post">
  <h3 style="color:rgb(241, 14, 7);">Eliminar cuestionario</h3><input type="submit" name="id" value="<?php echo $idcues3;  ?>" class="misc"></input>

</form>
           		</div>
             <br>
             <?php

}
}
                                ?>

  </div>
    <br>

  </div>
<br>
</nav>
<script>

  function abrir() {

    document.getElementById("edit3").style.display="block";


}



</script>
  </body>
</html>
