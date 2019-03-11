<?php
	$conn = mysqli_connect("127.0.0.1","root","","SimulazioneEsame");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$username = $_GET["a"];
	$password = $_GET["b"];
	
	$sql = "SELECT Nome FROM Visitatori WHERE Nome='".$username."' AND Password='".$password."'";
	$result = $conn->query($sql);

	$response = "";

	while($row = $result->fetch_assoc()) {
		$response .= .$row["Nome"].;
	}
	$result->free();
	$conn->close();
	echo $response;
?>