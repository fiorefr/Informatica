<?php
$conn = mysqli_connect("127.0.0.1","root","","SimulazioneEsame");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = $_GET["a"];
$password = $_GET["b"];
$email = $_GET["c"];
$lingua = $_GET["d"];
$telefono = $_GET["e"];
$nazione = $_GET["f"];

$sql = "INSERT INTO visitatori (Nome, Password, Email, Telefono, Nazione, LinguaMadre) values ('".$username."', '".$password."', '".$email."', '".$telefono."', '".$nazione."' ,'".$lingua."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$result->free();
$conn->close();

echo $response;
?>