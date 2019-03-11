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

	<title> Register </title>
	<link rel="shortcut icon" href="_images/server.ico" />
  
</head>
<body  style="background: linear-gradient(to bottom, #ff9999 0%, #ff99cc 100%);">

	<h1 class="text-center"><strong><font size="10" color="black">REGISTER SERVER</font></strong></h1>
<div>  
<form action="_ajax/register.php" class="text-center" method="GET">
  Username:<br>
  <input type="text" id="username" placeholder="Inserisci username">
  <br><br>
  Password:<br>
  <input type="password" id="password" type="text" placeholder="Inserisci password">
  <br><br>
  E-Mail:<br>
  <input type="email" id="email" type="text" placeholder="Inserisci email">
  <br><br>
  Lingua madre:<br>
  <input type="txt" id="lingua" type="text" placeholder="Inserisci Lingua Primaria">
  <br><br>
  Telefono:<br>
  <input type="text" id="telefono" type="text" placeholder="Inserisci Telefono">
  <br><br>
  Nazione di origine:<br>
  <input type="text" id="nazione" type="text" placeholder="Inserisci Nazionalità">
  <br><br>
  <a href="ciao.php" class="btn btn-default btn-lg" onclick="registraUser()">Registrati</a>
</form>  
</div>
	
</body>
</html>