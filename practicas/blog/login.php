<?php session_start();

	require 'admin/config.php';
	require 'funciones.php';

	//comprobamos si los archivos han sido enviados porque se envian a la misma pagina.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//se comprueban si son el nombre y contraseña definidos en el fichero admin.

		$usuario = limpiarDatos($_POST['usuario']);
		$password = limpiarDatos($_POST['password']);

		if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
			$_SESSION['admin'] = $blog_admin['usuario'];
			header('Location:'. RUTA . '/admin');
		}


	}


	require 'views/login.view.php';
	
?>