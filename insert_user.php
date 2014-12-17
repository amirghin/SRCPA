<?php

Include "DatabaseConnector.php";

if ($_POST['password']!= $_POST['verificar_password'])
 	{
     	echo("Oops! Password did not match! Try again. ");
 	}else{

 		$options = array('cost' => 11);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
		$usuario = $_POST['nombre_usuario'];
		$tipo = $_POST['tipo_usuario'];
		
		

		$insert_user = "INSERT INTO usuarios (nombre, password, roles_idrol) VALUES ('${usuario}','${password}',${tipo})";
		//mysqli_query($con,$insert_user);
		if (mysqli_query($con, $insert_user)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . mysqli_error($con);
		}

		mysqli_close($con);

 	}

?>
