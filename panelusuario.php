<?php include 'sesiones.php' ?>
	<nav class="principal">

		<br>
		<div class="misvideos">
		<h3>&nbsp&nbsp&nbspNuevos VIDEOS que te podrian interesar:</h3>
		<br>

	 <iframe width="502" height="315" src="https://www.youtube.com/embed/jr778iVqfKg" frameborder="0"
	 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<iframe width="502" height="315" src="https://www.youtube.com/embed/shwylEKl9Qs" frameborder="0"
	 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="502" height="315" src="https://www.youtube.com/embed/WGVB15e85xs" frameborder="0"
		 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="502" height="315" src="https://www.youtube.com/embed/0W5Wfw9P6mI" frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

        <div class="miscuestionarios">

				<h3>Cuestionarios que te pueden interesar:</h3>

				<div class="a3">

				  <h4>Id cuestionario:</h4>
				  <h4 class="busque">Angelddddddddddddddngelito el crack bro</h4>
				  <br>
				  <h4>Nombre cuestionario:</h4>
				    <h4 class="busque">ngelito el crack bro</h4>
				  <br>
				  <h4>Nombre creador:
				    <h4 class="busque"> Angel</h4>
				    <form class="" action="realizarcuestionario.php" method="post">
				    <?php

				    if (strlen($password)>0) {
				      echo '<input type="text" name="pass" placeholder="digitar contraseña de cuestionario"></input>';
				    }
				    else {

				    }

				     ?>

				    <input type="submit" name="realizar" value="Angelddddddddddddddngelito el crack bro" class="sf3"></input>
				  </form>
				</div>
</div>



	</nav>



</body>
</html>
