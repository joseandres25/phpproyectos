<?php 

	try {

		$conexion = new PDO('mysql:host=localhost;dbname=paginacion','root','');

		
	} catch (PDOException $e) {
		echo "error" . $e->getMessage();
		die();

	}
 
	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;

	$postPorPagina = 4;

	//inicio de cada pagina para traer
	$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;


	$articulos = $conexion->prepare("

		select SQL_CALC_FOUND_ROWS * 
		from articulos 
		limit $inicio, $postPorPagina");

	$articulos->execute();

	$articulos = $articulos->fetchAll();

	if(!$articulos){
		header('Location: index.php');
	}


	$totalArticulos = $conexion->query('select FOUND_ROWS() as total');

	$totalArticulos = $totalArticulos->fetch()['total'];

	$numeropaginas = ceil($totalArticulos / $postPorPagina);

	echo $numeropaginas;

	require 'index.view.php';



 ?>