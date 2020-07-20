
<?php include 'sesiones.php';
      include 'cues.php';;
			 ?>

	<br>
	<br>
	<br>
	<center><h1 class="c">Mi cuenta</h1></center>

	<center><table width="60%"  cellspacing="20" cellpadding="20">
   <tr>
  <td>

		 <center><img src="<?php echo $imgper; ?>" class="fp" ></center>


 <center><h3>Cambiar imagen de perfil</h3></center>
 <form method="post" action="subirfoto.php" enctype="multipart/form-data">
 <input type="file" name="subirfoto"></input>
 <input type="submit" value"subirimagen" class="sf" name="subir"></input>
</form>
  </td>
	<td>
	           </td>
	<td>
    <center>
			<h3>Mi Progreso</h3>
			<center><svg version="1.1" width="120" height="120" viewBox="0 0 120 120">
    <circle cx="60" cy="60" r="37"
            fill="RoyalBlue" />
  </svg></center>
		</center>
  </td>
</tr>
<tr></tr>
<center>
	<tr>
	<td colspan="30">
    <div class="al">
		<h3>Cuestionarios completados de SUITCASE</h3>
		<br>
		<?php
					session_start();
					$conexion = mysqli_connect("localhost","root","","suitcase");
					$consulta2="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario'";
					$resultado2=mysqli_query($conexion, $consulta2);



					if ($resultado2) {
					while ($fila2 = $resultado2->fetch_array()) {
					$Componente2 = $fila2['Componente'];
					$puntaje2 = $fila2['puntaje'];

					?>


		<div class="a">
			<br>
			<h2>Componente:&nbsp<?php echo $Componente2;  ?> &nbsp&nbsp&nbsp&nbsp&nbspPuntaje:&nbsp<?php echo $puntaje2;  ?></h2>

		</div>
  <br>
  <?php

  }
  }
   ?>
		</table>
  </center>


  <div class="al2">
  <h3>Mas cuestionarios completados</h3>
  <br>
  <?php
        session_start();
        $conexion = mysqli_connect("localhost","root","","suitcase");
        $consulta2="SELECT * FROM puntajes WHERE Nombre_usuario='$usuario'";
        $resultado2=mysqli_query($conexion, $consulta2);



        if ($resultado2) {
        while ($fila2 = $resultado2->fetch_array()) {
        $Componente2 = $fila2['Componente'];
        $puntaje2 = $fila2['puntaje'];

        ?>


  <div class="a">
    <br>
    <h2>Componente:&nbsp<?php echo $Componente2;  ?> &nbsp&nbsp&nbsp&nbsp&nbspPuntaje:&nbsp<?php echo $puntaje2;  ?></h2>

  </div>
<br>
<?php

}
}
 ?>
  </table>
</center>



</body>
</html>
