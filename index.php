<?php
Include "header.php";
Include "DatabaseConnector.php";
session_start();
$_SESSION["nombre"] = $_POST["nombre_usuario"];
$_SESSION["contrasena"] = $_POST["password"];

?>

<section class="content row">

	<div class="login col-md-6">
		<form action="verify_password.php" method="POST" role="form" data-parsley-validate>
			<fieldset>
				<legend>Iniciar sesion</legend>
				<div class="form-group">
					<label for="nombre_usuario">Nombre <span class="error">*</span></label>
					<input name="nombre_usuario" type="text" class="form-control" required/>
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

