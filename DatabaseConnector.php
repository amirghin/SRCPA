<?php
$con = mysqli_connect("localhost","root","1234","Veterinaria"); //1234 es el password mio

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Connected to database";
  }
?>