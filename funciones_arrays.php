<?php 


	$amigo = array('telefono' => 15646546, 'edad' => 62, 'pais' => 'españa');

	/*
	//extrae los elementos asocioativos como si fueran variables.
	 extract($amigo);

	 echo $telefono;
	*/

	 $semana = array('lunes','martes','miercoles','jueves');


	 $ultimodia= array_pop($semana);
	 echo $ultimodia;

	foreach ($semana as $dia) {
		echo $dia;

	}
	//los coje todos y los imprime separados por lo que le indiquemos a la funcion.
	echo join(' - ',$semana);

	echo count($semana);

	$semana_reves = array_reverse($semana);

	echo join(',', $semana_reves);

 ?>