<?php


Include "Owner.php";
Include "Pet.php";
Include "Expedient.php";
Include "header.php";
	//class AppInit{
		
	//}
?>
	<h2>Formulario Creado Exitosamente</h2> 
<?php	
	$owner = new Owner($_POST["nombre"], $_POST["apellido"], $_POST["telefono"], $_POST["email"], $_POST["cedula"]);
	$pet = new Pet($_POST["nombre_mascota"], $_POST["tipo"], $_POST["raza"], $_POST["fecha_nacimiento"], $owner);
	echo $owner->getName();
	echo $pet->getName();

?>