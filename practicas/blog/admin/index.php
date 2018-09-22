<?php 
	session_start();

	//archivo index del admin

	require 'config.php';
	require '../funciones.php';

	$conexion = conexion($bd_config);

	//comprobar sesion

	comprobarSession();

	if(!$conexion){
		header('Location:../error.php');
	}

	$posts= obtener_post($blog_config['post_por_pagina'],$conexion);


	
	require '../views/admin_index.views.php';


 ?>