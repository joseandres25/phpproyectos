<?php 

	
$texto = '< > & "" ';

//nos convierte el codigo en caracteres especiales
echo htmlspecialchars($texto);

//trim() elimina espacioes en blancos

$texto2= ' hola jose ';

//echo trim($texto2);

//echo strlen(trim($texto2));

//$hola = substr($texto2, 1,4);

//echo $hola;


strtoupper($texto2);
//nos dice la posicion de la palabra.
echo strrpos($texto2, 'j');

 ?>