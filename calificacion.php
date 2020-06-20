<?php


echo "<br>";

if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op1'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op1'] as $selected1){
echo $selected1."</br>";// Imprime resultados
echo "<br>";
$num_countries1 = count($_POST['op1']);
echo "<br>";

  }
}
else {
  $num_countries1 = 0;
}
}
echo "<h3>$num_countries1</h3>";


if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['c'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['c'] as $selected2){
  echo $selected2."</br>";
  echo "<br>";
  $num_countries2 = count($_POST['c']);
  echo "<br>";
  $nota = 100/40*($num_countries2);


  }
}
else {
  $num_countries2 = 0;
  $nota = 0;
}

}
echo "<h3>$num_countries2</h3>";


if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op3'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op3'] as $selected3){
echo $selected3."</br>";// Imprime resultados
echo "<br>";
$num_countries3 = count($_POST['op3']);
echo "<br>";






  }
}
else {
  $num_countries3 = 0;
}
}
echo "<h3>$num_countries3</h3>";

if(isset($_POST['Enviar'])){//Validacion de envio de formulario
if(!empty($_POST['op4'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['op4'] as $selected4){
echo $selected4."</br>";// Imprime resultados
echo "<br>";
$num_countries4 = count($_POST['op4']);
echo "<br>";




  }
}
else {
  $num_countries4 = 0;
}
}

echo "<h3>$num_countries4</h3>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$totalrespuestas = $num_countries1+$num_countries2+$num_countries3+$num_countries4;

if ($totalrespuestas>40 && $totalrespuestas<42) {
  $notab = $nota-6;
  echo "<h2>Tu puntaje es de $notab, has respondido doble
   en alguna pregunta ten mas cuidado</h2>
   <p>Te recomendamos las siguientes asesorias</p>";







}
elseif ($totalrespuestas>42 && $totalrespuestas<46 ) {
   $notab = $nota-22;
   echo "<h2>Tu puntaje es de $notab, has respondido doble
    en muchas pregunta ¡ten mucho cuidado!</h2>
    <p>Te recomendamos las siguientes asesorias:</p>";









}
elseif ($totalrespuestas>46) {
  $notab = $nota-35;
  echo "<h2>Parece que no has estado muy antento, has respondido doble en demasiadas preguntas, tu puntaje es de $notab
  <p>Te recomendamos ver las siguientes asesorias</p>";









}
elseif ($totalrespuestas<40) {
  $notab = $nota-2;
  echo "<h2>Te ha faltado responder algunas preguntas tu puntaje es de $notab
        <p>Te recomendamos ver las siguientes asesorias";








}
elseif ($totalrespuestas=40) {
  $notab = $nota;


}

        include("conexionbd.php");
         $con = New Conexion();
         session_start();
        $sentencia="insert into Puntajes values('".$_SESSION['usuario']."','".$_POST['Envia']."','".$notab."')";
        $resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));







 ?>
