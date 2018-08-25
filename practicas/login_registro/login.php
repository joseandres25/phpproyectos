<?php 

	session_start();


	if(isset($_SESSION['usuario'])){
			header('Location: index.php');

	}

	$errores = '';
	//comprobamos si los datos han sido enviados
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		//no intennte inyectar codigo con filter_var
		$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512', $password);

		try {
			
			$conexion = new PDO('mysql:host=localhost;dbname=login','root','');


		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();

		}


		//No funciona la comprobacion de la base d datos.
		$statement = $conexion->prepare('
			SELECT * FROM usuarios
			where usuario = :usuario AND pass = :password');
		var_dump($statement);
		$statement->execute(array(
			':usuario' => $usuario, 
			':password' => $password
		));

		$resultado = $statement->fetch();
	
		if($resultado !== false){

			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');

		}else{
			$errores .= '<li>Datos incorrectos </li>';
		}


	}



	require 'views/login.view.php';


 ?>