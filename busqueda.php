<?php

Include "DatabaseConnector.php";


$query = "SELECT a.idAnimal,a.nombre, a.tipo,a.raza,a.fechaNacimiento,CONCAT_WS(' ',d.nombre, d.apellido1) as dueno
                FROM Veterinaria.Animal a , Veterinaria.Dueno d 
                WHERE a.Dueno_idDueno = d.idDueno AND UPPER(${criterio_busqueda}) = '${busqueda}'";


$query_info = mysqli_query($con, $query);
if (mysqli_num_rows($query_info) > 0) {
    ?>
    <table style="width:50%">
        <tr>
            <th>Nombre</th>
            <th>Especie</th>        
            <th>Raza</th>
            <th>Fecha Nacimiento</th>
            <th>Due&ntilde;o</th>

        </tr>
        <?php while($row = mysqli_fetch_assoc($query_info)) {?>

            <tr>
                <td><?php echo "${row['nombre']}" ?></td>
                <td><?php echo "${row['tipo']}"?></td>
                <td><?php echo "${row['raza']}"?></td>
                <td><?php echo "${row['fechaNacimiento']}"?></td>
                <td><?php echo "${row['dueno']}"?></td>

            </tr>
       

        <?php }; ?>
    </table> 
    
 <?php }else{

    echo "No se encontr&oacute; ninguna coincidencia para su busqueda";
    }; ?>


