<!DOCTYPE html>
<html>
<head>
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="cuestionario.css">
</head>
<body>

			<p> <?php

$competencia=$_POST['tipos'];

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
    ?>

    <center>
		<nav id="pantallacuestionario">
			<br>
			<br>
			<h4>

		<?php echo 	"<center><h2>$Competencia_pregunta</h2></center>"; ?>


			</p>
			</h4>

				<h4> <?php echo $Contextualizacion; ?> </h4>



				<h4><?php echo $pregunta; ?></h4>


                <nav id="options">
				<form method="POST" action="cuestionarios.php">
					<h4>


                   <br>

                    <input type="radio" name="axino" value=""><?php echo $opcion1; ?>

                      <br>

                   <input type="radio" name="axino" value="2"><?php echo $opcion2; ?>


                      <br>

                    <input type="radio" name="axino" value="3"><?php echo $opcion3; ?>

                      <br>

                    <input type="radio" name="axino" value="3"><?php echo $opcion4; ?>

                      <br>

                      <br>


    </nav>
    </center>

    <?php

    }
}
    ?>

</body>
</html>
