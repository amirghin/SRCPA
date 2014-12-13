<?php
Include "header.php";
Include "navigation.php";
session_start();
$_SESSION["nombre"] = $_POST["nombre_usuario"];
$_SESSION["contrasena"] = $_POST["password"];
echo $_SESSION["nombre"];
?>

<section class="content row">

	<div class="crear_expediente">
		<h2>Crear expediente</h2>
		<form action="crear_expediente.php" method="POST" role="form" data-parsley-validate>
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
			</fieldset>
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

			<fieldset class="col-md-12">
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

