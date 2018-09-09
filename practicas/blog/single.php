<?php 
	require 'admin/config.php';
	require 'funciones.php';

	$conexion= conexion($bd_config);
	$id_articulo = id_articulo($_GET['id']);

	if(empty($id_articulo)){
		header('Location:index.php');
	}

	if(!$conexion){
		header('Location:error.php');
	}


	$post = obtener_post_id($conexion,$id_articulo);

	if(!$post){
		header('Location:index.php');
	}

	//como es un array de arrays hay que acceder al primer array
	$post = $post[0];

	require 'views/single.view.php';

 ?>