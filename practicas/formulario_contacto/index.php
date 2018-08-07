<?php 

	$errores = "";
	$enviado = "";
	if(isset($_POST['enviar'])){

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];


		if(!empty($nombre)){
			$nombre = trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

		}else{
			$errores .= 'Ingresa un nombre <br />';
		}
		if(!empty($correo)){
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			//filter_var($correo, FILTER_VALIDATE_EMAIL);//devuelve  false si no es correcto sino devuelve el correo
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'introduce un correo valido <br />';

			}

		}else{
			$errores .= 'Ingresa un correo <br />';
		}

		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);

		}else{
			$errores .= 'Ingresa un mensaje <br />';
		}


		if(empty($errores)){
			$enviar_a = 'joseas@asda.es';
			$asunto = 'Correo enviado desde mipagina.com';
			$mensaje1 = 'De :' . $nombre .'\n';
			$mensaje1 .= 'Correo: ' . $correo . '\n';
			$mensaje1 .= 'Mensaje: ' . $mensaje;

			mail($enviar_a, $asunto, $mensaje1);
			$enviado = 'true';
		}

	}

	require 'index.view.php';


 ?>