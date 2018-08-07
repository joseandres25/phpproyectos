<?php 
	
	//se utilizan para guardar informacion del sitio,de la fuente, color

	//nombre de la cookie, valor, tiempo para la cookie. sitio de la cookie

	//Para quitar una cookie con el signo ( - ). Solo caben 4mb de informacion.
	setcookie('font-size','45px', time() - 60 * 60 * 24 * 30,'/');


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Document</title>


</head>
<body>
	<h1>cookie seteada</h1>
</body>
</html>