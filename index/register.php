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
<!--<body style="background-image:url(Matrix-Gif-Wallpapers-002.jpg)">-->
<body  style="background: linear-gradient(to bottom, #ff9999 0%, #ff99cc 100%);">

	<h1 class="text-center"><strong><font size="10" color="white">REGISTER SERVER</font></strong></h1>
<div>        <!--
<font color="black">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>E-mail</th>
      </tr>
	</thead>
	   <tbody>
		<tr>
			<td><input id="username" type="text" placeholder="Insert username"></td>
			<td><input id="password" type="text" placeholder="Insert password"></td>
			<td><input id="email" type="email" placeholder="Insert Email"></td>
		</tr>
    </tbody>
  </table>
  <a href="index.php" class="btn btn-default btn-lg" onclick="registraUser()">Save</a>
  <!--<button onclick="registraUser()" href="index.php">Save</button>
  </font>-->
  
  
  
<form action="_ajax/register.php" class="text-center">
  Username:<br>
  <input type="text" name="username" id="username" placeholder="Insert username">
  <br><br>
  Password:<br>
  <input type="password" name="password" id="password" type="text" placeholder="Insert password">
  <br><br>
  E-Mail:<br>
  <input type="email" name="email" id="mail" type="text" placeholder="Insert mail">
  <br><br>
  Lingua madre:<br>
  <input type="txt" name="lingua" id="lingua" type="text" placeholder="Insert Language">
  <br><br>
  Telefono:<br>
  <input type="text" name="telefono" id="telefono" type="text" placeholder="Insert phone">
  <br><br>
  Nazionalita:<br>
  <input type="text" name="nazionalita" id="nazionalita" type="text" placeholder="Insert nationality">
  <br><br>
  <a href="lista.php" class="btn btn-default btn-lg" onclick="registraUser()">Submit</a>
</form>  

<!-- <input type="submit" value="Submit" onclick="registraUser()">
-->

</div>

		
	</table>
	
	
</body>
</html>