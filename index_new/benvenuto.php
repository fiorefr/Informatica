<!DOCTYPE html>
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

	<title> Database </title>
	<link rel="shortcut icon" href="_images/server.ico" />
  
</head>
<!--<body style="background-image:url(Matrix-Gif-Wallpapers-002.jpg)">-->
<body style="background-color:Green;">

	<h1 class="text-center"><strong><font size="10" color="black">Benvenuto</font></strong></h1>
<div>   

	Benvenuto : 
	<?php
		$conn = mysqli_connect("127.0.0.1","root","","SimulazioneEsame");
		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$username=$_

		$sql = "SELECT Nome FROM Visitatori WHERE Nome='".$username."'";
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

		
	</table>
	
	
</body>
</html>




