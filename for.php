<?php 

	$numero=10;


	for ($i=0; $i <= 10; $i+=5) { 
		echo "$i  <br />";
	}
	echo '<br />';

	$meses = array(
		'enero', 'febrero','marzo','abril',
		'mayo','junio','julio','agosto',
		'septiembre','octubre','noviembre'

	);

	for ($i=0 ;$i < count($meses) ; $i++) { 
		echo $meses[$i] . '<br />';
	}

	echo '<br />';
	$cuenta= 0;

	while ($cuenta < count($meses)) {
		echo $meses[$cuenta] . '<br />';
		$cuenta++;
	}

	$var = 1;

	do {

		echo $var;
		$var++;
	} while ( $var <=10);

	
	
?>