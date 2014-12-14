<?php
Include "header.php";
Include "navigation.php";
?>

<form action="crear_expediente.php" method="POST" role="form" data-parsley-validate>
	<fieldset class="col-md-6">
		<legend>Datos del due&#241;o</legend>
		<div class="form-group">
			<label for="nombre">Nombre <span class="error">*</span></label>
			<input name="nombre" type="text" class="form-control" required/>
		</div>
		<div class="form-group">
			<label for="apellido">Primer Apellido <span class="error">*</span></label>
			<input name="apellido" type="text" class="form-control" required/>
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
	
	</fieldset>
</form>

<?php
Include "footer.php";
?>