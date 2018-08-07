<?php 

	$paises = array('mexico','españa','portugal');


	foreach ($paises as $pais) {
		
		echo $pais . '<br />';
		if($pais == 'españa'){
			break;
		}
	}


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<h1>Pais europeo</h1>
 		<?php 
 			foreach ($paises as $pais) {
 				
 				if($pais == 'mexico'){
 					continue;
 				}
 				echo $pais . '<br />';
 			}


 		 ?>
 </body>
 </html>