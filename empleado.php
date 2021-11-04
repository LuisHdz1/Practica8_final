<?php include ('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleado</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="/action_page.php" method="get">
  <label for="fname">Nombres:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Apellidos:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="fname">Numero de Telefono:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Direccion:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="fname">Numero de Empleado:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form>
				</article>
			</div>

            <?php include ('sidebar.php'); ?>
		</div>
	</section>
    <?php include ('footer.php'); ?>
</body>
</html>