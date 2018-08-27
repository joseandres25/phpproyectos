<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir foto</h1>

		</div>
	</header>

	<!--((enctype="multipart/form-data")) sirve para poder subir ficheros en un formulario -->
	<div class="contenedor">
		<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"
			enctype="multipart/form-data">

			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">


			<label for="titulo">introduce tu texto</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripcion</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
			<?php if (isset($error)): ?>
				<ul>
					<li><?php echo $error;?></li>
				</ul>
			<?php endif ?>
			<input type="submit" class="submit" value="Subir foto">
			
		</form>
	</div>



	<footer>
		<p class="copyright">
			Galeria creado por: José Andrés García Fernández.
		</p>
	</footer>

</body>
</html>