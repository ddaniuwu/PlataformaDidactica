<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="ROBOTS" content="NOINDEX,FOLLOW">
<meta charset="utf-8">
</head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>
	<center>
<div class="p-3 mb-2 bg-primary text-white"><h1>INICIO</h1></div>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">
  	<?php
  session_start();
echo  $_SESSION["_usuario"];
$usuario = $_SESSION["_usuario"];
?>
  </span>
</nav>


<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">
  	<a href="../Galeria.php" target="_blank"><h1 class="h1">Jugar</h1></a>
  </span>
</nav>
</center>
</body>
</html>