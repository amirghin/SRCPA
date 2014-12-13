<?php
Include "header.php";
Include "navigation.php";
?>
<h2>Crear Cita</h2>
	<form >
		<fieldset>
			<div class="form-group">
				<label for="fecha_cita">Fecha <span class="error">*</span></label>
				<input name="fecha_cita" type="text" class="form-control" id="datepicker" required placeholder="Click para ingresar fecha"/>				
			</div>
			<div class="form-group">
				<label for="hora_cita">Hora <span class="error">*</span></label>
				<input name="hora_cita" type="text" class="form-control" required/>				
			</div>
			<div class="form-group">
				<label for="hora_cita">Tipo de cita <span class="error">*</span></label>
				<select>
					<option>Control</option>
					<option>Emergencia</option>
				</select>		
			</div>
		</fieldset>

	</form>

<?php
Include "footer.php";
?>