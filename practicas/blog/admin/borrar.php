<?php 

	session_start();
	require 'config.php';
	require '../funciones.php';


	comprobarSession();

	$conexion = conexion($bd_config);

	if(!$conexion){
		header('Location:../error.php');
	}


	$id = limpiarDatos($_GET['id']);

	if(!$id){
		header('Location: '. RUTA . '/admin');
	}


	$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
	$statement->execute(array(
		'id' => $id
	));
	//borramos cual sea y nos dirigimos al inicio

	header('Location: '. RUTA . '/admin');


?>