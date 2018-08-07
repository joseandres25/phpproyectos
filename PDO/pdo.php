<?php 


	

	try {
		//codigo
		$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
		//echo "conexion ok";

		//Metodo query
		//es bueno pero puedes inyectar codigo.MALO
		/*
		$datos = $conexion->query("select * from usuarios where id= 1");
		
		foreach ($datos as $fila) {
			echo $fila['id'] . ' - ' . $fila['nombre'] . '<br/>';
		}

		//inserto un nuevo dato
		//$datos = $conexion->query('insert into usuarios values(null,"juan","as@es.es")');
		*/

		//Metodo prepare_statment consultas preparadas. no se puede inyectar codigo.

		//poner un placeholder para identificar el valor pasado (:id)
		$statement = $conexion->prepare('insert into usuarios values(null,"ramon","")');

		$statement->execute();
		//fetch devuelve uno 
		//fetchall devuelve todos
		
		$statement = $conexion->prepare('select * from usuarios');
		$statement->execute();


		$resultado= $statement->fetchall();
		foreach ($resultado as $fila) {
			echo $fila['nombre'] . '<br/>';

		}
	


	} catch (PDOException $e) {
		//mostrar error
		echo "error: " . $e->getMessage();
		
	}




 ?>