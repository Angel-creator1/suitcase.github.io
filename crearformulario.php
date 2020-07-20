<?php include 'sesiones.php' ?>

    	<nav class="principal2">

    		<br>
        <div class="misvideos">


    		<br>
<button class="video"><a href="subirvideo" class="s">Subir video<a></button>
  <br>

  <h2>&nbsp&nbsp&nbspMis Videos</h2>
    		&nbsp&nbsp&nbsp<iframe width="230" height="138" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
    		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    		<iframe width="230" height="138" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
    		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    		<iframe width="230" height="138" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
    		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe width="230" height="138" src="https://www.youtube.com/embed/7DsQ0SKx7ik" frameborder="0"
    		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>

      <div class="miscuestionarios">
            <button class="video"><a href="subirformu.php" class="s">Subir Cuestionario<a></button>
              <br>

              <?php
           					session_start();
           					$conexion = mysqli_connect("localhost","root","","suitcase");
           					$consulta2="SELECT * FROM cuestionarios_usuarios WHERE Nombre_usuario='$usuario'";
           					$resultado2=mysqli_query($conexion, $consulta2);



           					if ($resultado2) {
           					while ($fila2 = $resultado2->fetch_array()) {
           					$idcues = $fila2['id_cuestionario'];
           					$nom_cues = $fila2['nombre_cuestionario'];

            ?>
               <h2>&nbsp&nbsp&nbsp&nbspMis Cuestionarios:</h2>
<br>
           		<div class="a">
           			<br>
           			<h4>Id cuestionario:</h4>
                <h4><?php echo $idcues;  ?></h4>
                <br>
                <h4>Nombre cuestionario:&nbsp<?php echo $nom_cues; ?></h4>

<form class="" action="micuestio.php" method="post">
  <input type="submit" name="mi" value="<?php echo $idcues;  ?>"></input>

</form>

           		</div>
             <br>
             <?php
                              }
                            }

                                ?>
  </div>

</nav>

  </body>
</html>
