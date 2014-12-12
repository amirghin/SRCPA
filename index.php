<?php
Include "header.php";
session_start();
$_SESSION["nombre"] = $_POST["nombre_mascota"];
$_SESSION["contrasena"] = $_POST["password"];
?>
<section class="content row">

	<div class="login col-md-6">
		<form action="formulario_expediente.php" method="POST" role="form" data-parsley-validate>
			<fieldset>
				<legend>Iniciar sesion</legend>
				<div class="form-group">
					<label for="nombre_mascota">Nombre <span class="error">*</span></label>
					<input name="nombre_mascota" type="text" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="tipo">Contrasena <span class="error">*</span></label>
					<input name="password" type="password" class="form-control" required/>
				</div>
				<input type="submit" value="Iniciar Sesion">
			</fieldset>
			
			
		</form>	
	</div>
</section>
<?php
Include "footer.php";
?>

