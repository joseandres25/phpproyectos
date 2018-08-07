<!DOCTYPE html>
<html>
<head>
	<title>Formulario contacto</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<div class="wrap">
		<form action=" <?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
			<input type="text" name="nombre" class="form-control" placeholder="nombre" value="<?php if(!$enviado && isset($nombre)){echo $nombre;}?>"id="nombre">
			<input type="text" name="correo" class="form-control" placeholder="correo" value="<?php if(!$enviado && isset($correo)) echo $correo;?>" id="correo">
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Introduce tu mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje;?></textarea>
			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php  echo $errores;?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert exito">
					<p>Enviado correctamente</p>
				</div>

			<?php endif ?>

			<input type="submit" name="enviar" class="btn btn-primary" id="" value="enviar correo">
			<input type="reset">
		</form>

	</div>


</body>
</html>