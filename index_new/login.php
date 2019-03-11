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
	<script src="_js/register.js"></script>

	<title> Login </title>
	<link rel="shortcut icon" href="_images/server.ico" />
  
</head>
<body style="background-color:Green;">

	<h1 class="text-center"><strong><font size="10" color="black">Login</font></strong></h1>
<div>  
<form action="_ajax/login.php" action="ciao.php" class="text-center" method="GET">
  Username:<br>
  <input type="text" name="username" id="username" placeholder="Inserisci username">
  <br><br>
  Password:<br>
  <input type="password" name="password" id="password" type="text" placeholder="Inserisci password">
  <br><br>
  <a href="ciao.php" class="btn btn-default btn-lg" onclick="loggaUser()">Login</a>
</form>  
</div> 
	
</body>
</html>



