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

$sql = "SELECT * FROM Visite";
$result = $conn->query($sql);

$response = "";

while($row = $result->fetch_assoc()) {
	$response .= "<tr><td>".$row["Titolo"]."</td><td>".$row["DurataMedia"]."</td><td>+".$row["Luogo"]."</td></tr>";
}



$result->free();
$conn->close();

echo $response;

?> 