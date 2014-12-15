<?php
Include "header.php";
Include "navigation.php";

?>

<section class="content row">

	<div class="crear_expediente">
		<h2>Crear expediente</h2>
		<form action="crear_expediente.php" method="POST" role="form" data-parsley-validate class="row">
			<fieldset class="col-md-6">
				<legend>Datos de la mascota</legend>
				<div class="form-group">
					<label for="nombre_mascota">Nombre <span class="error">*</span></label>
					<input name="nombre_mascota" type="text" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="tipo">Tipo <span class="error">*</span></label>
					<input name="tipo" type="text" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="raza">Raza</label>
					<input name="raza" type="text" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="fecha_nacimiento">Fecha de nacimiento  <span class="error">*</span></label>
					<input name="fecha_nacimiento" type="text" class="form-control" id="datepicker" required placeholder="Click para ingresar fecha"/>
				</div>
				<div class="form-group"> 
					<label>Dueno</label>
					<select class="form-control" name="dueno">
						<option value=""></option>
						<?php
						Include "DatabaseConnector.php";

						$query_duenos = "SELECT idDueno, CONCAT_WS(' ', nombre,apellido1,cedula) AS dueno FROM Dueno";
						$info_duenos = mysqli_query($con, $query_duenos);
						if (mysqli_num_rows($info_duenos) > 0) {

								while($row = mysqli_fetch_assoc($info_duenos)) {

									echo "<option value=\"${row['idDueno']}\">${row['dueno']}</option>";

								}

						}
						?>
						
					</select>	
				</div>
				<div class="form-group">
					<a href="formulario_dueno.php">Crear dueno</a>
				</div>
			</fieldset>

			<fieldset class="col-md-6">
				<legend>Informacion Medica</legend>
				<div class="form-group">
					<label for="condiciones">Condiciones <span class="error">*</span></label>
					<textarea name="condiciones" class="form-control" required/></textarea>
				</div>		
				<div class="form-group">
					<label for="condiciones">Medicamento Actual <span class="error">*</span></label>
					<textarea name="condiciones" class="form-control" required/></textarea>
				</div>					
			</fieldset>				
			<input type="submit" value="Enviar">
		</form>	
	</div>

</section>
<?php
Include "footer.php";
?>

