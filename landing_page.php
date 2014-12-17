<?php
Include "header.php";
Include "navigation.php";
session_start();
$_SESSION["nombre"] = $_POST["nombre_usuario"];
$_SESSION["contrasena"] = $_POST["password"];

?>
<div class="content">
	<h2>Bienvenido <strong><?php echo $_SESSION["nombre"];?></strong></h2>
	<p>El sistema le permite crear nuevas citas</p>
</div>



<?php
Include "footer.php";
?>

