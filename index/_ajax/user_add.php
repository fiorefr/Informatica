<?php

$conn = mysqli_connect("127.0.0.1","root","","SimulazioneEsame");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*else{
	echo "Connected to MySQL.";
}*/  

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];
$e = $_GET["e"];
$f = $_GET["f"];


$sql = "INSERT INTO Visitatori (Nome, Password, Email, LinguaVisitatore, Telefono, Nazionalità) VALUES ('".$a."', '".$b."', '".$c."', '".$d."', '".$e."' ,'".$f."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$result->free();
$conn->close();

echo $response;
?>