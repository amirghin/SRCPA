<?php
Include "Owner.php";
Include "Pet.php";
Include "Expedient.php";
Include "header.php";
Include "DatabaseConnector.php";
?>
 <h2>Formulario Creado Exitosamente</h2> 
<?php 

 $pet = new Pet($_POST["nombre_mascota"], $_POST["tipo"], $_POST["raza"], $_POST["fecha_nacimiento"], $_POST["dueno"]);
 echo $pet->sendToDatabase();
 $nombre = $_POST["nombre_mascota"];
 $id_dueno= $_POST["dueno"];
 //echo $nombre;
 //echo $id_dueno;
 $query_expediente = "SELECT a.idAnimal FROM Animal a, Dueno d WHERE d.idDueno = '${id_dueno}' AND a.nombre = '${nombre}'";
 $info_id = mysqli_query($con, $query_expediente);
 //$id_animal = mysqli_fetch(mysqli_query($con, $query_expediente));

 while ($row=mysqli_fetch_assoc($info_id))
    {
     $query_crear_expediente = "INSERT into Expediente(Animal_idAnimal) values (${row['idAnimal']})";
     mysqli_query($con, $query_crear_expediente);
    }

 //echo $id_animal;

 $con->close();

?>