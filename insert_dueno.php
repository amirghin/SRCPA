<?php

Include "DatabaseConnector.php";

$nombre = 'adrian';
$apellido = 'astorga';
$telefono = '22151818';
$email = 'adrian@aastorga.com';
$cedula = '113620726';


$insert_user = "INSERT INTO Dueno (nombre, telefono, email, cedula, apellido1) 
				VALUES ('${nombre}','${telefono}', '${email}', '${cedula}', '${apellido}')";
$check_user = "SELECT idDueno FROM Dueno WHERE nombre = '${nombre}' AND cedula = '${cedula}'";

if (mysqli_num_rows(mysqli_query($con,$check_user)) > 0 ){

	echo "El usuario ya existe";
}else{
	if (mysqli_query($con, $insert_user)) {
		echo "Nuevo Due&ntilde;o Creado de manera exitosa";
	} else {
		echo "Error: " . mysqli_error($con);
	}

	mysqli_close($con);


}


?>