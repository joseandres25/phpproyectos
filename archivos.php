<?php 

	/*
	$resultado= file_exists('documentos.text');

	if(file_exists('documentos.text')){
		echo "el archivo existe";
	}else {
		echo"el archivo no existe";
	}*/
	//obtine la info del documento
	/*
	echo file_get_contents('documentos');
	*/

	//sobreescribe datos fichero. SIN FILE_APPEND
	//file_put_contents('documentos',"hola jose2 \n",FILE_APPEND);

	//agregar numero 1 al 10 al fichero

	/*
	file_put_contents('documentos', '');
	for ($i=1; $i <= 10 ; $i++) { 
		file_put_contents('documentos', "$i \n",FILE_APPEND);
	}
	*/


	//cada linea del fichero es un array

	$archivo = file('documentos');

	echo $archivo[7];


 ?>