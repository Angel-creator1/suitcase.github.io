<!DOCTYPE html>
<html>
<head>
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="cuestionario.css">
	<link rel="icon" href="img/logo.png" type="image/jpg">
</head>
<body>

			<p> <?php

			session_start();
			error_reporting(0);
			if ($_SESSION['usuario'] == '') {

				echo "<h1>Usted no puede. ingresar</h1>";
				die();
			}
			$_SESSION['usuario'];



$competencia = $_POST['tipos'];

echo "<center><h2>Cuestionario $competencia</h2></center>";


$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta="SELECT * FROM cuestionarios WHERE Componente='$competencia'";
$resultado=mysqli_query($conexion, $consulta);



if ($resultado) {
 while ($fila = $resultado->fetch_array()) {
 	$Competencia_pregunta = $fila['Competencia_pregunta'];
    $Contextualizacion = $fila['Contextualizacion'];
    $pregunta = $fila['pregunta'];
    $opcion1 = $fila['opcion1'];
    $opcion2 = $fila['opcion2'];
    $opcion3 = $fila['opcion3'];
    $opcion4 = $fila['opcion4'];
		$imagen = $fila['Imagen'];





    ?>

    <center>
		<nav id="pantallacuestionario">
			<br>
			<br>
			<h4>

		<?php echo 	"<center><h2>$Competencia_pregunta</h2></center>"; ?>


			</p>
			<h4>
  <img src="<?php echo $imagen; ?>">
							</h4>

			<p>	<h4> <?php echo $Contextualizacion; ?> </h4> </p>



				<h4><?php echo $pregunta; ?></h4>


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
                        <form class="" action="calificacion.php" method="post">
 												<?php
 											echo implode('<br>', array_chunk($aux, 4)[0]);
 											?>





    </nav>
    </center>



<?php

}
}

 ?>
 <center> <input type="checkbox" name="Envia" value="<?php echo $competencia;?>">Listo</center>
 <center><input type="submit" name="Enviar" value="Enviar"></center>

 </form>
 </body>
</html>
