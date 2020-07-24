<?php

 include 'sesiones.php';
 include 'cues.php';

 $id = $_POST['realizar'];

$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta="SELECT * FROM cuestionarios_usuarios WHERE id_cuestionario='$id'";
$resultado=mysqli_query($conexion, $consulta);



if ($resultado) {
while ($fila = $resultado->fetch_array()) {
$nomcues = $fila['nombre_cuestionario'];
$Contextualizacion = $fila['Contextualizacion'];
$pregunta = $fila['pregunta'];
$opcion1 = $fila['opcion1'];
$opcion2 = $fila['opcion2'];
$opcion3 = $fila['opcion3'];
$opcion4 = $fila['opcion4'];
$imagen = $fila['imagen'];
$imagen2 = $fila['imagen2'];



?>
<br>
<br>
<h1>  <?php

    echo 	"<center><h2>$nomcues</h2></center>";
    ?>
  </h1>
    <center>
		<nav id="pantallacuestionario">
      <?php

  			echo 	"<center><h2>$nomcues</h2></center>";
        ?>
<?PHP

			 if (strlen($imagen) < 35){
			        echo "<h3>&nbsp</h3>";
			}
							else {
								echo '<img src="'.$imagen,'"style="width:500px;height:300px;">';
							}


				?>


										<?php list($primera,$segunda,$tercera,$cuarta,$quinta,$sexta,$septima,$octava,$novena,$decima,$once,$doce,$trece,
										           $catorce,$quince,$dieciseis,$diecisiete,$diesiocho,$diesinueve,$vente,$ventiuno,$ventidos,$ventitres,
															 $venticuatro,$venticinco,$ventiseis,$ventisiete,$ventiocho,$ventinueve,$treinta,$trentayuno,$trentaydos,
															 $treintaytres,$treintaycuatro,$treintaycinco,$treintayseis,$treintaysiete) = explode("&",$Contextualizacion) ?>

							<h5> <?php echo $primera,$segunda,$tercera,$cuarta,$quinta,$sexta,$septima,$octava,$novena,$decima,$once,$doce,$trece,
												 $catorce,$quince,$dieciseis,$diecisiete,$diesiocho,$diesinueve,$vente,$ventiuno,$ventidos,$ventitres,
												 $venticuatro,$venticinco,$ventiseis,$ventisiete,$ventiocho,$ventinueve,$treinta,$trentayuno,$trentaydos,
												 $treintaytres,$treintaycuatro,$treintaycinco,$treintayseis,$treintaysiete;?> </h5>


							<h5><?php echo $pregunta; ?></h5>

				<?php

               if (strlen($imagen2) < 35){
                echo "<h3>&nbsp</h3>";
        }
                else {
                  echo '<img src="'.$imagen2,'"style="width:500px;height:300px;">';
                }

        ?>
			                <nav id="options">

			                   <br>


												 <?php



												 $op1 = '<input type="checkbox" name="op1[]" value="1">' .$opcion1;
			 										$opc = '<input type="checkbox" name="c[]" value="2">' .$opcion2;
			 											$op3 = '<input type="checkbox" name="op3[]" value="3">' .$opcion3;
			 												$op4 = '<input type="checkbox" name="op4[]" value="4">' .$opcion4;


			 												$preguntas = array($op1,$opc,$op3,$op4);

			 											$aux = array_unique($preguntas);
			 											shuffle($aux);
			 											?>
			                        <form class="" action="calificacion_usuarios.php" method="post">

			 												<?php
			 											echo implode('<BR>', array_chunk($aux, 4)[0]);
			 											?>


			    </nav>
        </center>




<?php


}
}

 ?>

 <center> <input type="checkbox" name="Envia" value="<?php echo $id;?>"></input>Listo</center>
 <center><input type="submit" name="Enviar" value="Enviar" class="b"></input></center>

 </form>
 </body>
</html>
