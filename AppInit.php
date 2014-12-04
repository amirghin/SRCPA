<?php


Include "Owner.php";
Include "Pet.php";
Include "Expedient.php";

	//class AppInit{
		
	//}
	$owner = new Owner($_POST["nombre"], $_POST["apellido"], $_POST["telefono"], $_POST["email"], $_POST["cedula"]);
	$pet = new Pet($owner, $_POST["nombre_mascota"], $_POST["tipo"], $_POST["raza"], $_POST["fecha_nacimiento"]);
	//$pet->setName($_POST["nombre_mascota"]);
	//echo $owner->getName();
	//echo $pet->getOwner();
	$j = json_encode($pet);
	echo $j;
	/*echo $pet->getType();
	echo $pet->getBreed();*/

?>