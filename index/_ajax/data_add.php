<?php

$conn = mysqli_connect("127.0.0.1","root","root","test");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*else{
	echo "Connected to MySQL.";
}*/  

var $a="a";
var $b="b";
var $c=2;

echo $_GET[$a]; 
echo $_GET[$b];
echo $_GET[$c];


$sql = "INSERT INTO rubrica (nome, cognome, telefono)
VALUES ($a, $b, $c)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>