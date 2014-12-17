<?php


Include "Owner.php";
Include "Pet.php";
Include "Expedient.php";
Include "header.php";
Include "DatabaseConnector.php";
?>
	<h2>Formulario Creado Exitosamente</h2> 
<?php	
	//$owner = new Owner($_POST["nombre"], $_POST["apellido"], $_POST["telefono"], $_POST["email"], $_POST["cedula"]);
	$pet = new Pet($_POST["nombre_mascota"], $_POST["tipo"], $_POST["raza"], $_POST["fecha_nacimiento"], $_POST["dueno"]);
	//echo $owner->getName();
	echo $pet->getName();
	echo $pet->getBirthdayDate();
	echo $pet->getOwner();
	echo $pet->sendToDatabase();
	$con->close();
	/*$insert_Mascota = "INSERT INTO Animal (nombre, tipo, raza, fechaNacimiento, Dueno_idDueno) VALUES ({'$pet->getName()'},{'$pet->getType()'}, {'$pet->getBreed()'} , {'$pet->getBirthdayDate()'},{'$pet->getOwner()'})";
	if (mysqli_query($con, $insert_Mascota)) {
		echo "Animal Creado de manera exitosa";
	} else {
		echo "Error: " . mysqli_error($con);
	}

	$con->close();*/
?>