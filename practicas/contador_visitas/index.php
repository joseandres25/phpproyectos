<?php 

	function  contar_usuarios(){

		$archivo = 'contador.txt';
		if(file_exists($archivo)){

			$num = file_get_contents($archivo) + 1;
			file_put_contents($archivo, $num);

			return $num;

		}else{
			//si el fichero no existe se Crea automaticamente con el nonmbre definido en la variable.
			file_put_contents($archivo, 1);
			return  1;
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Contador de visitas</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 		
 		<span class="contador">
 			<?php echo "nº de visitas \n" . contar_usuarios(); ?>
 		</span>

 </body>
 </html>