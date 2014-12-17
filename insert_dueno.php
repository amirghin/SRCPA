<?php

Include "DatabaseConnector.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$apellido2 = $_POST['segundo_apellido'];


$insert_user = "INSERT INTO Dueno (nombre, telefono, email, cedula, apellido1, apellido2) 
				VALUES ('${nombre}','${telefono}', '${email}', '${cedula}', '${apellido}', '${segundo_apellido}')";
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