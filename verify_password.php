<?php

Include "DatabaseConnector.php";

$user = $_POST["nombre_usuario"];
$password = $_POST["password"];


$query_user = "SELECT password FROM usuarios WHERE nombre = '${user}'";
$hash = mysqli_fetch_assoc(mysqli_query($con, $query_user));
mysqli_close($con);

if (password_verify($password, $hash['password'])) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}	

?>

