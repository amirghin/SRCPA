<?php

Include "DatabaseConnector.php";

$nombre_animal = strtoupper($_POST['nombre']);

$query_animal = "SELECT a.idAnimal,a.nombre, a.tipo,a.raza,a.fechaNacimiento,CONCAT_WS(' ',d.nombre, d.apellido1) as dueno
				FROM Veterinaria.Animal a , Veterinaria.Dueno d 
				WHERE a.Dueno_idDueno = d.idDueno AND UPPER(a.nombre) = '${nombre_animal}'";



$info_animal = mysqli_query($con, $query_animal);
if (mysqli_num_rows($info_animal) > 0) {
    // output data of each row
	echo "<!DOCTYPE html>

	<html>

	<head>
	<style>
		table, th, td {
    		border: 1px solid black;
    		border-collapse: collapse;
		}
		th, td {
    		padding: 5px;
		}
	</style>
	</head>

	<body>

	<table style=\"width:50%\">
  	<tr>
    	<th>Nombre</th>
    	<th>Especie</th>		
    	<th>Raza</th>
    	<th>Fecha Nacimiento</th>
    	<th>Due&ntilde;o</th>

  	</tr>";
    while($row = mysqli_fetch_assoc($info_animal)) {

    	echo "<tr>
    		<td>${row['nombre']}</td>
    		<td>${row['tipo']}</td>
    		<td>${row['raza']}</td>
    		<td>${row['fechaNacimiento']}</td>
    		<td>${row['dueno']}</td>

  		</tr>";
        

    }

    echo "</table>";

}


?>


