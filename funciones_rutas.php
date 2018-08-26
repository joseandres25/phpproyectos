<?php 

	
	// echo pathinfo('cursoPHP/documento', PATHINFO_FILENAME);


	//buscar directorios con un patron

	//busca los dire
	//$resultados = glob('sessions/*.{php,html,txt}', GLOB_BRACE);

	//print_r($resultados);

	//te extre el fichero de la ruta.
	//echo basename('carpeta1/carpeta2/archivo.php');

	//te quita la extension tambien
	//echo basename('carpeta1/carpeta2/archivo.php','.php');

	//devuelve el directorio padre de la ruta.
	echo dirname('carpeta1/carpeta2/archivo.php');



	// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
	// * PATHINFO_FILENAME // Devuelve el nombre del archivo


 ?>