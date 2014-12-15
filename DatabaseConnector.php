<?php
<<<<<<< HEAD
$con = mysqli_connect("localhost","vetadmin","1234","Veterinaria"); //1234 es el password mio
=======
$con = mysqli_connect("localhost","root","1234","Veterinaria"); //1234 es el password mio
>>>>>>> 36102edf23c09b714fa1c42fb8558191868fa140

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>