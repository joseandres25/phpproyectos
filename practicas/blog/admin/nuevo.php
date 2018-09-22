<?php 

	session_start();
	require 'config.php';
	require '../funciones.php';


	comprobarSession();

	$conexion = conexion($bd_config);

	if(!$conexion){
		header('Location:../error.php');
	}

	//comprobamos si los datos han sido enviados. y los traemos a las variables.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$titulo = limpiarDatos($_POST['titulo']);
		$extracto = limpiarDatos($_POST['extracto']);
		$texto = $_POST['texto'];
		$thumb = $_FILES['thumb']['tmp_name'];

		//ruta del fichero
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

		//guardamos la imagen
		move_uploaded_file($thumb, $archivo_subido);

		$statement = $conexion->prepare(
			'INSERT INTO articulos (id, titulo, extracto, texto, thumb)
			VALUES (NULL, :titulo, :extracto, :texto, :thumb)'
		);

		$statement->execute(
			array(
				':titulo' => $titulo,
				':extracto' => $extracto,
				':texto' => $texto,
				':thumb' => $_FILES['thumb']['name']

			)
		);

		header('Location:'. RUTA . '/admin');

	}



	require '../views/nuevo.view.php';

 ?>