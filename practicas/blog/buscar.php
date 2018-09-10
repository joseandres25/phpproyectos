<?php 
	require 'admin/config.php';
	require 'funciones.php';

	$conexion = conexion($bd_config);

	if(!$conexion){
		header('Location:error.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){

		$busqueda = limpiarDatos($_GET['busqueda']);

		$statement = $conexion->prepare('
			SELECT * from articulos where titulo LIKE :busqueda or texto LIKE :busqueda');
		$statement->execute(array(':busqueda' => "%$busqueda%"));
		$resultados = $statement->fetchAll();

		if(empty($resultados)){
			$titulo = "no se encontraron articulos con ese nombre: " . $busqueda;
		}else {
			$titulo = "resultados de la busqueda " . $busqueda;
		}

	}else{
		header('Location:index.php');
	}

	require 'views/buscar.view.php';
 ?>