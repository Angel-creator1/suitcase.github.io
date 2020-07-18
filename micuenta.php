
<?php include 'sesiones.php' ?>
	<br>
	<br>
	<br>
	<br>
	<center><h1 class="c">Mi cuenta</h1></center>
	<br>
	<br>

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
	<td><?php $esp = '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'; ?>
	           <?php echo $esp;
						       echo $esp; ?></td>
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
		<h3>Cuestionarios completados</h3>
		<br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
     <br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
     <br>
		<div class="a">
			<br>
			<h4>hola my bros</h4>
		</div>
	</td>
</tr>



</center>
		</table></center>


</nav>




</body>
</html>
