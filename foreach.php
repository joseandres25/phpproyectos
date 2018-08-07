<?php 

	$meses = array(
		'enero', 'febrero','marzo','abril',
		'mayo','junio','julio','agosto',
		'septiembre','octubre','noviembre','diciembre'

	);

	$alejandro = array('telefono' => 1564155151, 'edad' => 26, 'dni' => 14774445);




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<h1>Meses</h1>
 		<ul>
 			<?php 
 				
 				foreach ($meses as $mes) {
 					echo '<li> '. $mes .'</li>';
 				}
				
				foreach ($alejandro as $dato => $valor) {
					
					echo '<li> '. $dato . ':' . $valor .'</li>';
				}


 			?>
 		</ul>
 </body>
 </html>