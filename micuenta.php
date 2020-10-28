
<?php include 'sesiones.php';
      include 'cues.php';;
			 ?>


	<center><h1 class="c">Mi cuenta</h1></center>
<br>
<br>
	<center><table width="60%"  cellspacing="20" cellpadding="20">
   <tr>
  <td>

		 <center><div class="fp" style="background-image: url(<?php echo $imgper; ?>);"></div></center>


 <center><h3>Cambiar imagen de perfil</h3></center>
 <form method="post" action="subirfoto.php" enctype="multipart/form-data">
 <input type="file" name="subirfoto"></input>
 <input type="submit" value="Subir imagen" class="sf" name="subir"></input>
</form>
  </td>
	<td>
	           </td>

</tr>
<tr></tr>
<center>
	<tr>
	<td>
    <div class="al">
		<h3>Cuestionarios completados de SUITCASE</h3>

    <form class="" action="resultados.php" method="post" style="width:400px;">
      <img src="img/buscador.png" style="height:28px;width:32px;"><input type="text" name="buscarr" placeholder="Buscar en mis cuestionarios Completados de SUITCASE"></input>
      <input type="submit" name="buscar" value="buscar" class="sf2"></input>
    </form>
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


		<div class="a4">
			<br>
			<h2>Componente:&nbsp</h2><h2 style="color:rgb(17, 8, 241)"><?php echo $Componente2;  ?></h2> <h2>&nbsp&nbsp&nbsp&nbsp&nbspPuntaje:&nbsp</h2><h1 style="color:rgb(17, 8, 241)">&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $puntaje2;  ?></h1>

		</div>
  <br>
  <?php

  }
  }
   ?>
		</table>
  </center>

<br><br><br>
  <div class="al2">
  <h3>Mas cuestionarios completados</h3>

  <form class="" action="resultados.php" method="post" style="width:400px;">
  <img src="img/buscador.png" style="height:28px;width:32px;">  <input type="text" name="buscarr" placeholder="Buscar por puntaje,id o nombre"></input>
    <input type="submit" name="buscar" value="buscar" class="sf2"></input>
  </form>
  <br>
  <?php
        session_start();
        $conexion = mysqli_connect("localhost","root","","suitcase");
        $consulta2="SELECT * FROM puntajes_usuarios WHERE Nombre_usuario='$usuario'";
        $resultado2=mysqli_query($conexion, $consulta2);



        if ($resultado2) {
        while ($fila2 = $resultado2->fetch_array()) {
        $Componente3 = $fila2['id_cuestionario'];
        $puntaje3 = $fila2['puntaje'];
        $creador = $fila2['Nombre_creador'];

        ?>


  <div class="a4">
    <br>
    <h4>Id cuestionario:&nbsp<?php echo $Componente3;  ?></h4>
    <h2>&nbsp&nbsp&nbsp&nbsp&nbspPuntaje:&nbsp<?php echo $puntaje3;  ?></h2>
    <h2>&nbsp&nbsp&nbsp&nbsp&nbspCreador:&nbsp<?php  echo $creador; ?></h2>

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
