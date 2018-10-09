<?php 

	session_start();
	require 'config.php';
	require '../funciones.php';


	comprobarSession();

	$conexion = conexion($bd_config);

	if(!$conexion){
		header('Location:../error.php');
	}
	//modificacion de los datos.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$titulo = limpiarDatos($_POST['titulo']);
		$extracto = limpiarDatos($_POST['extracto']);
		//la unica persona que accede es el admin y no va a poner html o codigo.
		$texto = $_POST['texto'];
		$thumb_guardada = $_POST['thumb-guardada'];
		$id = limpiarDatos($_POST['id']);
		$thumb = $_FILES['thumb'];

		if(empty($thumb['name'])){
			$thumb = $thumb_guardada;
		}else{
			$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
			move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
			$thumb = $_FILES['thumb']['name'];
		}

		//cuando tenemos todas las comprobaciones tenemos que hacer la inserccion en la BD.

		$statement = $conexion->prepare(
			'UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id'
		);
		$statement->execute(array(
			':titulo' => $titulo,
			':extracto' => $extracto,
			':texto' => $texto,
			':thumb' => $thumb,
			':id' => $id

		));

		header('Location: ' . RUTA . '/admin');

	}else{

		//Recibimos los datos.
		$id_articulo = id_articulo($_GET['id']);
		//si no hay articulo se envia al panel de administracion.
		if(empty($id_articulo)){
			header('Location: '. RUTA . '/admin');
		}

		$post = obtener_post_id($conexion,$id_articulo);
		//si no hay post se envia al panel de administracion.
		if(!$post){
			header('Location: '. RUTA . '/admin');
		}

		$post = $post[0];

	}


	require '../views/editar.view.php';


 ?>