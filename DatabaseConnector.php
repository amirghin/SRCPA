<?php
$con = mysqli_connect("localhost","root","1234","Veterinaria");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Connected to database";
  }
?>