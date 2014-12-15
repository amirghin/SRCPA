<!DOCTYPE html>
<html>
<body>


<form action="action_page.php" method="post">
	<fieldset>
		<legend>Por Due&ntilde;o:</legend>
			Buscar Por: <input type="text" name="buscar">
			<br>
			<input type="radio" name="busqueda_dueno" value="nombre" checked> Nombre
			<input type="radio" name="busqueda_dueno" value="apellido"> Apellido
			<input type="radio" name="busqueda_dueno" value="apellido"> C&#233;dula
			<br><br>
			<input type="submit" value="Buscar"></fieldset>
</form>

<br><br>

<form action="busqueda_animal.php" method="post">
	<fieldset>
		<legend>Por Mascota:</legend>
			Buscar Por: <input type="text" name="nombre">
			<br>
			<input type="radio" name="busqueda_animal" value="nombre" checked> Nombre
			<br><br>
			<input type="submit" value="Buscar"></fieldset>
</form>

</body>
</html>