<?php

Include "DatabaseConnector.php";

if ($_POST['password']!= $_POST['verificar_password'])
 	{
     	echo("Las contrase&ntilde;as no son iguales");
 	}else{

 		$options = array('cost' => 11);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
		$usuario = $_POST['nombre_usuario'];
		$tipo = $_POST['tipo_usuario'];
		
		

		$insert_user = "INSERT INTO usuarios (nombre, password, roles_idrol) VALUES ('${usuario}','${password}',${tipo})";
		if (mysqli_query($con, $insert_user)) {
    		echo "Usuario Creado de manera exitosa";
		} else {
    		echo "Error: " . mysqli_error($con);
		}

		mysqli_close($con);

 	}

?>
