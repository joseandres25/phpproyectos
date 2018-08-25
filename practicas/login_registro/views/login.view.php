<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="bg-primary">
	<div class="w-25 h-25 m-auto bg-warning">
		
		<h1 class="titulo">Inicar sesion</h1>
		<hr class="border"></hr>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form w-50 " name="login">
			<div class="form-group">
				
				<i class="ml-0 fa fa-user"></i>
				<input type="text" name="usuario" class="mr-0" placeholder="usuario">

			</div>
			<div class="form-group">
				
				<i class="ml-0 fa fa-lock"></i><input type="password" name="password" class="mr-10 w-50" placeholder="contraseña"><i class="submit fa fa-arrow-right btn-primary w-5 h-100" onclick="login.submit();"></i>

			</div>
			<?php if (!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>

			<?php endif ?>

		</form>
		<p class="text-center">
			¿aun no tienes cuenta?
		<a href="registro.php">Registrate</a>
		</p>
	</div>

</body>