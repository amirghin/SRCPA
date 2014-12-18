<?php
Include "header.php";
Include "navigation.php";
$idAnimal = $_POST['idAnimal'];
?>
<br>
<h2>Citas de: <?php echo $_POST['nombreAnimal']?></h2>

<br><br>
<input type="button" id="mostrar" value="Ingresar entrada">

<?php

Include "DatabaseConnector.php";

$query = "SELECT ch.fecha, ch.descripcion, ch.medicamentos FROM Citas_Historico ch
            WHERE ch.Citas_idCitas = (SELECT c.idCitas FROM Citas c WHERE Animal_idAnimal = ${_POST['idAnimal']})";

$query_info = mysqli_query($con, $query);

if (mysqli_num_rows($query_info) > 0) {
    ?>
    <table style="width:50%">
        <tr>
            <th>Fecha</th>
            <th>Descripci&oacute;n</th>        
            <th>Medicamentos</th>

        </tr>
        <?php while($row = mysqli_fetch_assoc($query_info)) {?>

            <tr>
                <td><?php echo "${row['fecha']}" ?></td>
                <td><?php echo "${row['descripcion']}"?></td>
                <td><?php echo "${row['medicamentos']}"?></td>
             
            </tr>
       

        <?php }; ?>
    </table> 
    
 <?php }else{

    echo "No se encontr&oacute; ninguna cita";
    }; ?>

<br><br>
<h2>Proximas Citas:</h2>

<?php
if(isset($_POST['agregar'])){

$cita_query = "SELECT idCitas FROM Citas WHERE Animal_idAnimal = ${_POST['idAnimal']}";
$id_cita = mysqli_fetch_assoc(mysqli_query($con, $cita_query));
$descripcion = $_POST['descripcion'];
$medicamentos = $_POST['medicamentos'];


$insert_expediente = "INSERT INTO Citas_Historico (fecha,descripcion,medicamentos,Citas_idCitas) VALUES (NOW(),'${descripcion}','${medicamentos}','${id_cita['idCitas']}')";


if (mysqli_query($con, $insert_expediente)) {
        echo "Nueva entrada creada";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con); 
}

?>



<?php

$cita_query = "SELECT fecha,descripcion FROM Proximas_Citas WHERE Animal_idAnimal = ${_POST['idAnimal']}";


$cita_query_info = mysqli_query($con, $cita_query);

if (mysqli_num_rows($cita_query_info) > 0) {
    ?>
    <table style="width:50%">
        <tr>
            <th>Fecha</th>
            <th>Descripci&oacute;n</th>        

        </tr>
        <?php while($cita_row = mysqli_fetch_assoc($cita_query_info)) {?>

            <tr>
                <td><?php echo "${cita_row['fecha']}" ?></td>
                <td><?php echo "${cita_row['descripcion']}"?></td>
             
            </tr>
       

        <?php }; ?>
    </table> 
    
 <?php }else{

    echo "No se encontr&oacute; ninguna cita";
    }; ?>

    <br><br>
    <form action="" method="post" id="entrada_expediente" style="display:none">
        <label>Descripci&oacute;n</label>
        <input name="descripcion" type="text" />
        <label>Medicamentos</label>
        <input name="medicamentos" type="text" />
        <input type="hidden" name="idAnimal" value="<?php echo $idAnimal;?>">
        <input type="submit" value="Guardar" name="agregar">

    </form>


<?php

Include "footer.php";
?>