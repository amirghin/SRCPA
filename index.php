<?php
Include "header.php";
Include "DatabaseConnector.php";
session_start();
$_SESSION["nombre"] = $_POST["nombre_usuario"];
$_SESSION["contrasena"] = $_POST["password"];
?>

<section class="content row">

	<div class="login col-md-6">
		<form action="" method="POST" role="form" data-parsley-validate>
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
				<input type="submit" value="Iniciar Sesion" name="login">
			</fieldset>
			
			
		</form>	
	</div>
</section>


<?php
if(isset($_POST['login'])){
	$user = $_POST["nombre_usuario"];
	$password = $_POST["password"];
	$query_user = "SELECT password FROM usuarios WHERE nombre = '${user}'";
	$hash = mysqli_fetch_assoc(mysqli_query($con, $query_user));
	mysqli_close($con);
	if (password_verify($password, $hash['password'])) {
	    header('Location: /SRCPA/landing_page.php');
	} else {
	    echo 'Invalid password.';
	}	
}
Include "footer.php";
?>

