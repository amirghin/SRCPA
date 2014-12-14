<?php
$con = mysqli_connect("localhost","root","1234","Veterinaria"); //1234 es el password mio

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Connected to database";
  }

	$sql = "SELECT idrol, nombre FROM roles";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "idrol: " . $row["idrol"]. " - Name rol: " . $row["nombre"]. " " . "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$con->close();
?>