<?php
Include "header.php";
Include "navigation.php";
?>

<br><br>
<form action="insert_dueno.php" method="POST" role="form" data-parsley-validate>
	<fieldset class="col-md-6">
		<legend>Datos del due&#241;o:</legend><br>
		<div class="form-group">
			<label for="nombre">Nombre <span class="error">*</span></label>
			<input name="nombre" type="text" class="form-control" required/>
		</div>
		<div class="form-group">
			<label for="apellido">Primer Apellido <span class="error">*</span></label>
			<input name="apellido" type="text" class="form-control" required/>
		</div>
		<div class="form-group">
			<label for="segundo_apellido">Segundo Apellido <span class="error">*</span></label>
			<input name="segundo_apellido" type="text" class="form-control" required/>
		</div>		
		<div class="form-group col-md-6">
			<label for="telefono">Numero de telefono <span class="error">*</span></label>
			<input name="telefono" type="text" class="form-control" required/>
		</div>	
		<div class="form-group col-md-6">
			<label for="email">Email <span class="error">*</span></label>
			<input name="email" type="email" class="form-control" required data-parsley-trigger="change"/>
		</div>	
		<div class="form-group">
			<label for="cedula">Numero de Cedula <span class="error">*</span></label>
			<input name="cedula" type="text" class="form-control" required/>
		</div>
		<input type="submit" value="Crear Due&ntilde;o">
	</fieldset>

</form>
		


<?php
Include "footer.php";
?>