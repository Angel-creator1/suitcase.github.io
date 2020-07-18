

<?php








/* foreach ($cuestionarios as $key => $value) {
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<h2>$key:</h2>";

	echo "<br>";
	echo "<br>";
	echo "<br>";


	foreach ($preguntasmatematicas as $key2 => $value2) {
		echo "<br>";
		echo "<br>";
		echo $key2;
		echo "<br>";
		echo "<br>";
		echo $value2;
		echo "<br>";

	}

}
*/



$botoncuestionario = $_POST["tipos"];

if($botoncuestionario == "Lectura critica")
{

    include'cuestionarios/cuestionariolenguaje.php';
}
else if ($botoncuestionario == "Matematicas") {

    include'cuestionarios/cuestionariomatematicas.php';
}
else if ($botoncuestionario == "Ingles") {

    include'cuestionarios/cuestionarioingles.php';

}
else if ($botoncuestionario == "Fisica") {

    include'cuestionarios/cuestionariofisica.php';
}
else if ($botoncuestionario == "Ciencias sociales") {

    include'cuestionarios/cuestionariosociales.php';
}
else if ($botoncuestionario == "Quimica") {

    include'cuestionarios/cuestionarioquimica.php';
}
else if ($botoncuestionario == "Presentar simulacro") {

    include'cuestionarios/pfisica/cuestionariofisica.php';
}
else if ($botoncuestionario == "Ciencias sociales") {
    include'cuestionarios/psociales/cuestionariosociales.php';
}
else if ($botoncuestionario == "Quimica") {

    include'cuestionarios/pquimica/cuestionarioquimica.php';
}
else if ($botoncuestionario == "Presentar simulacro") {

    include'';
}







?>
