<?php

	$mes = 'uno';

	switch ($mes) {
		case 'diciembre':
			echo "es diciembre";
		break;

		case 'diciembree':
			echo "es otro";
		break;

		default:

			echo "no existe";
		break;
	}


	if($mes == 'diciembre'){
		echo "es diciembre";

	}elseif ($mes == 'diciembree') {

		echo "es otro";
	}else{

			echo "no existe";

	}

	$edad = 18;
	//si existe un valor una variable o no.

	$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad' ;

	echo $edad;

?>