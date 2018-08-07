<?php 

$errores = '';

	if(isset($_POST['enviar'])){
		
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];


		if(!empty($nombre)){
			/*
				//elimino los espacios en blanco
				$nombre = trim($nombre);
				//no convierte en html el codigo introducido.
				$nombre = htmlspecialchars($nombre);
				//remueve los simbolos // \\
				$nombre = stripslashes($nombre);
			*/
			// Quitar el html inyectado SANEA EL HTML

				$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

			echo "tu nombre es " . $nombre ;
		}else{

			$errores .= 'Agrega un nombre <br>';

		}

		if(!empty($correo)){

			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){

				$errores .= 'ingresa un correo valido <br />';
			}else{


				echo '<br> tu correo: ' . $correo;
			}

		}else{

			$errores .= 'Agrega un correo <br>';
		}

	}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}

	</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="nombre" placeholder="nombre">
		<input type="text" name="correo" placeholder="correo">	

		<!-- Todo lo que este entre los if endif se ejecuta ya sea html o php-->
		<?php if(!empty($errores)): ?>
			<div class="error">
				<?php echo $errores; ?>
			</div>

		<?php endif ?>

		<input type="submit" name="enviar" >
	</form>

</body>
</html>