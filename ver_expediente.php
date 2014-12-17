<br>

<form action="formulario_cita.php" method="post">
    <input type="submit" name="crear_cita" value="Crear proxima citas"/>
    <input type="hidden" name="idAnimal" value="<?php echo "${_POST['idAnimal']}"?>">
</form>
<br>

<?php
Include "header.php";
Include "navigation.php";


?>
<br>
<h2>Expediente de: <?php echo $_POST['nombreAnimal']?></h2>

<br><br>

<?php

Include "DatabaseConnector.php";

$query = "SELECT eh.fecha, eh.enfermedad, eh.tratamiento FROM Expediente_Historico eh
		WHERE eh.Expediente_idExpediente = (SELECT e.idExpediente FROM Expediente e WHERE Animal_idAnimal = ${_POST['idAnimal']})";

$query_info = mysqli_query($con, $query);

$query_info = mysqli_query($con, $query);
if (mysqli_num_rows($query_info) > 0) {
    ?>
    <table style="width:50%">
        <tr>
            <th>Fecha</th>
            <th>Enfermedad</th>        
            <th>Tratamiento</th>

        </tr>
        <?php while($row = mysqli_fetch_assoc($query_info)) {?>

            <tr>
                <td><?php echo "${row['fecha']}" ?></td>
                <td><?php echo "${row['enfermedad']}"?></td>
                <td><?php echo "${row['tratamiento']}"?></td>
             
            </tr>
       

        <?php }; ?>
    </table> 
    
 <?php }else{

    echo "No se encontr&oacute; ninguna entrada en el expediente";
    }; ?>


<?php
Include "footer.php";
?>