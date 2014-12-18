<br>
<br>

<?php
Include "header.php";
Include "navigation.php";
$idAnimal = $_POST['idAnimal'];

?>
<br>
<h2>Expediente de: <?php echo $_POST['nombreAnimal']?></h2><br><br>
<form action="formulario_cita.php" method="post" style="float:left;margin-right:10px">
    <input type="submit" name="crear_cita" value="Crear proxima cita"/>
    <input type="hidden" name="idAnimal" value="<?php echo "${_POST['idAnimal']}"?>">
</form> 
<form action="formulario_todascitas.php" method="post" style="float:left;margin-right:10px">
    <input type="submit" name="crear_cita" value="Ver Historial de  Citas"/>
    <input type="hidden" name="idAnimal" value="<?php echo "${_POST['idAnimal']}"?>">
    <input type="hidden" name="nombreAnimal" value="<?php echo "${_POST['nombreAnimal']}"?>">
</form>
<input type="button" id="mostrar" value="Ingresar entrada">
<br>
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
    <br><br>
    <form action="" method="post" id="entrada_expediente" style="display:none">
        <label>Enfermedad</label>
        <input name="enfermedad" type="text" />
        <label>Tratamiento</label>
        <input name="tratamiento" type="text" />
        <input type="hidden" name="idAnimal" value="<?php echo $idAnimal;?>">
        <input type="submit" value="Guardar" name="agregar">

    </form>


<?php
if(isset($_POST['agregar'])){

$expediente_query = "SELECT idExpediente FROM Expediente WHERE Animal_idAnimal = ${_POST['idAnimal']}";
$id_expediente = mysqli_fetch_assoc(mysqli_query($con, $expediente_query));
$enfermedad = $_POST['enfermedad'];
$tratamiento = $_POST['tratamiento'];


$insert_expediente = "INSERT INTO Expediente_Historico (fecha,enfermedad,tratamiento,Expediente_idExpediente) VALUES (NOW(),'${enfermedad}','${tratamiento}','${id_expediente['idExpediente']}')";


if (mysqli_query($con, $insert_expediente)) {
        echo "Nueva entrada creada";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con); 
}





Include "footer.php";
?>