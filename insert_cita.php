<?php

Include "DatabaseConnector.php";

$fechaCita = $_POST['fecha_cita'];
$descripcion = $_POST['descripcion'];
$idAnimal = $_POST['idAnimal'];

$insert_cita = "INSERT INTO Proximas_Citas (Animal_idAnimal, fecha, descripcion) 
				VALUES (${idAnimal},'${fechaCita}', '${descripcion}')";
//$check_user = "SELECT idDueno FROM Dueno WHERE nombre = '${nombre}' AND cedula = '${cedula}'";


	if (mysqli_query($con, $insert_cita)) {
		echo "Nueva Cita creada";
	} else {
		echo "Error: " . mysqli_error($con);
	}

	mysqli_close($con); 




?>