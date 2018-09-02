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
			<h1 class="titulo">Foto: <?php if(!empty(!$foto['titulo'])){

				echo $foto['titulo'];
			}else{
				echo $foto['imagen'];
			}
			?></h1>

		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen']; ?>" alt="placeholder+image">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a href="index.php" class="regresar"> <i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
	</div>



	<footer>
		<p class="copyright">
			Galeria creado por: José Andrés García Fernández.
		</p>
	</footer>

</body>
</html>