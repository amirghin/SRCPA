<?php


Include "Owner.php";
Include "Pet.php";
Include "Expedient.php";

	//class AppInit{
		
	//}

	$pet = new Pet($_POST["nombre_mascota"], $_POST["tipo"], $_POST["raza"], $_POST["fecha_nacimiento"]);
	//$pet->setName($_POST["nombre_mascota"]);
	echo $pet->getName();
	echo $pet->getTipo();
	echo $pet->getBreed();

?>