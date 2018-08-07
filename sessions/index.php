<?php 
	
	//variable usada en varias paginas.
	//Paginas donde vayas a utilzar sesion.
	session_start();
	$_SESSION['nombre'] = 'jose';



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>	
	<h1>Pagina de inicio</h1>
	<p></p>
	<a href="pagina2.php">Ir a la página 2</a>
</body>
</html>