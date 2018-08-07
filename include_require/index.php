<?php 

	//Realiza toda la logica

	function suma($num1, $num2){
		return $num1 + $num2;
	}

	include_once 'vista.php';

	//include si te deja ejecutar toda la pagina. El archivo no es importante.
	//require no, sale un warning.Yno ejecuta nada. (el archivo importante)
	echo "hola";
 ?>