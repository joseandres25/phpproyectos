<?php 

	require 'funciones.php';
	$conexion = conexion('curso_galeria','root','');
	
	if(!$conexion){
		//header('Location: error.php');
		die();
	}

	//$_FILES es una variable global.
	//dice si subio los archivos
	if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){

		//comprobamos que ha subido una imagen
		// se añade @ para no tener NOTICE solo true o false.
		$check = @getimagesize($_FILES['foto']['tmp_name']);

		if($check !== false){

			$carpeta_destino = 'fotos/';
			$archivo_subida = $carpeta_destino . $_FILES['foto']['name'];
			//subir nuestra imagen a nuesra carpeta.
			move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subida);


			$statament = $conexion->prepare('
				INSERT INTO fotos (titulo,imagen,texto)
				 VALUES (:titulo, :imagen, :texto)
			');

			$statament->execute(array(
				':titulo' => $_POST['titulo'],
				':imagen' => $_FILES['foto']['name'],
				':texto' => $_POST['texto']

			));
			//FUNCIONA PERO HAY QUE DEJARLO SIN ESPACIOS

			//CORREGIR TODO LO DEMAS.HEADERS.
			//header("Location:http://localhost/cursoPHP/practicas/galeria/index.php");
			header("Location:index.php");
			die();
			
		}else {

			$error = "El archivo no es una imagen o es un archivo muy pesado";
		}


	}



	require 'views/subir.views.php';

 ?>