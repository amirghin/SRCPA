<?php
Include "header.php";
Include "navigation.php";
?>
<h2>Crear Cita</h2>
<section class="content row">
	<div class="crear_expediente col-md-6">
		<form action="insert_cita.php" method="post">
			<fieldset>
				<div class="form-group">
					<label for="fecha_cita">Fecha <span class="error">*</span></label>
					<input name="fecha_cita" type="text" class="form-control" id="datepicker" required placeholder="Click para ingresar fecha"/>				
				</div>
				<div class="form-group">
					<label for="hora_cita">Tipo de cita <span class="error">*</span></label>
					<input name="descripcion" type="text" class="form-control" required/>	
					<input type="hidden" value="<?php echo "${_POST['idAnimal']}"?>" name="idAnimal"/>	
				</div>
				<input type="submit" value="Crear Cita">

			</fieldset>

		</form>
	</div>
</section>

<?php
Include "footer.php";
?>