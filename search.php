<?php
Include "DatabaseConnector.php";
Include "header.php";
?>


<!DOCTYPE html>
<html>
<body>

<br><br>
<form action="" method="post">
	<fieldset>
		<legend>Por Due&ntilde;o:</legend>
			Buscar Por: <input type="text" name="dueno_buscar">
			<br>
			<input type="radio" name="busqueda_dueno" value="nombre" checked> Nombre
			<input type="radio" name="busqueda_dueno" value="apellido"> Apellido
			<input type="radio" name="busqueda_dueno" value="cedula"> C&#233;dula
			<br><br>
			<input type="submit" value="Buscar" name='search_dueno'></fieldset>
</form>

<br><br>

<form action="" method="post">
	<fieldset>
		<legend>Por Mascota:</legend>
			Buscar Por: <input type="text" name="animal_buscar">
			<br>
			<input type="radio" name="busqueda_animal" value="nombre" checked> Nombre
			<br><br>
			<input type="submit" value="Buscar" name='search_animal'></fieldset>
</form>

<br><br>
<?php
if(isset($_POST['search_animal'])){

	if ($_POST['animal_buscar'] != ""){
	$busqueda = strtoupper($_POST['animal_buscar']);
	$criterio_busqueda	= 'a.nombre';
	Include "busqueda.php";

	 }else{


	 	echo "Por favor digite el nombre de su mascota";
	 } 
}elseif(isset($_POST['search_dueno'])){

	if ($_POST['dueno_buscar'] != ""){

		$busqueda = strtoupper($_POST['dueno_buscar']);

			switch ($_POST['busqueda_dueno']) {
	    			case "nombre":
	        			$criterio_busqueda	= "d.nombre";
	        			break;
	    			case "apellido":
	        			$criterio_busqueda	= "d.apellido1";
	        			break;
	    			case "cedula":
	        			$criterio_busqueda	= "d.cedula";
	        			break;
			}

		Include "busqueda.php";

	 }else{


	 	echo "Por favor digite la informaci&oacute;n del due&ntilde;o";
	 } 



	}
?>



<?php
Include "footer.php";
?>
</body>
</html>