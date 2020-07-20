<?php
include 'sesiones.php';
include 'cues.php';


 ?>



<nav class="cal">

  <center><h1 class="inicio">Vas a comenzar el cuestionario de <?php echo $competencia; ?></h1></center>
  <br>
  <center><h2>Duración estimada: 1 hora 10 minutos</h2></center>
  <br>
  <center><h2>Este va a ser una muestra de tu desempeño, da tu mejor esfuerzo!</h2></center>
  <center><h3>Una vez envies el cuestionario tu resultado sera guardado en tu perfil
              y no podras repetirlo </h3></center>

  <center><img src="img/fms.png" style="width:480px;height:230px;"></center>
<br>

    <center><a href="javascript:abrir()" style="font-size: 179%; color:rgb(3, 134, 143);">Empezar cuestionario <?php echo $competencia;?></a></center>



</nav>
<div class="ventanapub" id="vent">
<center>  <img src="img/pepsi.jpg" style="width:450px;height:290px;"></center>

  <form action="cuestionario.php" method="post">
<center><input type="submit" value="<?php echo $competencia; ?>" name="tipos" class="i"></input></center>

<center><a href="panelusuario.php" class="vl">Volver</a></center>
</div>
<div class="ventanapub2" id="vent2">
  <center><img src="img/mcdonalds.jpg" style="width:500px;height:290px;"></center>
  <center><a href="javascript:abrire()" style="color: rgb(232, 25, 5);font-size:250%; ">Cerrar</a></center>
</div>


<script>

  function abrir() {
    document.getElementById("vent").style.display="none";
    document.getElementById("vent2").style.display="block";


}
function abrire() {
  document.getElementById("vent").style.display="block";
  document.getElementById("vent2").style.display="none";


}


</script>
