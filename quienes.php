

<?php
include 'sesiones.php';
?>
<br>
<br>
<br>
<br>

<center><table>
<tr>
 <td>
   <h2>Nombre de usuario &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>
 </td>
 <td>
   <h2>Puntaje &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>
 </td>
 <td>
   <h2>borrar</h2>
 </td>

<?php


$id0 = $_POST['mi'];
session_start();
$conexion = mysqli_connect("localhost","root","","suitcase");
$consulta2="SELECT * FROM puntajes_usuarios WHERE id_cuestionario='$id0'";
$resultado2=mysqli_query($conexion, $consulta2);



if ($resultado2) {
while ($fila2 = $resultado2->fetch_array()) {
$respoder = $fila2['Nombre_usuario'];
$puntaje = $fila2['puntaje'];



 ?>

</tr>
<td>
  <?php echo $respoder; ?>
</td>
<td>
<?php echo $puntaje; ?>
</td>
<td>
  aaaaaaaaaaaa
</td>

<?php

}
}
 ?>
</table></center>
</nav>

</body>
</html>
