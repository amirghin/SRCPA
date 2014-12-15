<?php

Include "DatabaseConnector.php";

$user = "Fabirucha";
$password = "1234";

$query_user = "SELECT password FROM usuarios WHERE nombre = '${user}'";
$hash = mysqli_fetch_assoc(mysqli_query($con, $query_user));
mysqli_close($conn);

if (password_verify($password, $hash['password'])) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>

