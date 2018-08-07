<?php

	$edad = 21;
	$nombre = 'carlos';
	$bool = false;

	if ($edad > 18 && $nombre!='carlos') {
	
		echo '<h1> igual </h1>';

	}else{

		echo '<h1> menor o no eres carlos </h1>';
	}

	if ($bool == true){
		echo 'bool es true';

	}else{
		echo 'bool no es true';
	}

/*
 		!= diferente
		! negacion

		&&
		|| o OR se cumple al menos una condicion
		xor se cumple solo 1 y solo una condición.

*/


?>