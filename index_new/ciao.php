<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="_css/mycss.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="_js/rubrica.js"></script>

	<title> Ciao </title>
	<link rel="shortcut icon" href="_images/server.ico" />
  
</head>
<body style="background-color:Green;">

	<h1 class="text-center"><strong><font size="10" color="black">Ciao</font></strong></h1>
<div>  
<!--	<?php

	if(!isset($_GET["username"])) echo "Username not set!";
	else $username = $_GET["username"];

	if(!isset($_GET["password"])) echo "Password not set!";
	else $password = $_GET["password"];

		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;

	echo "Benvenuto : ".$_SESSION["username"].", la tua password è : ".$_SESSION["password"];	
	
?>

-->

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


</div> 
	
</body>
</html>



