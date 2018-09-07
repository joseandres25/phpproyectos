<?php 

	//guardamos cuantos articulos usuario y contraseña.

	define('RUTA', 'http://localhost/cursoPHP/practicas/blog/');

	$bd_config = array(
		'basededatos' => 'curso_blog',
		'usuario' => 'root',
		'pass' => ''
	);

	$blog_config = array(
		'post_por_pagina' => '2',
		'carpeta_imagenes' => 'imagenes/'
	);

	$blog_admin = array(
		'usuario' => 'jose',
		'password' => '123'
	);


 ?>