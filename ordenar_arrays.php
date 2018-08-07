<?php

	$meses = array(
		'enero', 'febrero','marzo','abril',
		'mayo','junio','julio','agosto',
		'septiembre','octubre','noviembre','diciembre'

	);

	$numeros = array(1 , 25 ,60, 14 ,58,65);

	//sort($meses); ascendente
	//rsort($meses); //descendente

	rsort($numeros);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php  

		foreach ($numeros as $num) {
			
			echo '<li> '. $num . '</li>';

		}

		?>
	</ul>
</body>
</html>