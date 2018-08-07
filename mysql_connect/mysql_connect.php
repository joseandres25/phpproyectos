<?php 
	
	//Forma antigua

	//mata la ejecucion para que no carge la pagina.
	$conexion = new mysqli('localhost', 'root', '','prueba_datos');

	$conexion->set_charset("utf8");
	
	//permite pasar la consulta sql
	$datos = $conexion->query("select * from usuarios");


	while($f = $datos->fetch_object()){
    echo $f->nombre.' <br/>';
	}
	*/






	?>