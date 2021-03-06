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
			<h1 class="titulo">Galeria en PHP</h1>

		</div>
	</header>
	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php echo $foto['imagen'];?>" alt="placeholder+image">
					</a>
				</div>
			<?php endforeach; ?>

			<div class="paginacion">
				<?php if ($pagina_actual >1): ?>
					<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
					
				<?php endif ?>
				<?php if ($total_paginas != $pagina_actual): ?>
					
					<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina siguiente<i class="fa fa-long-arrow-right"></i></a>
					
				<?php endif ?>

				<!--
				<a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<a href="#" class="derecha">Pagina siguiente<i class="fa fa-long-arrow-right"></i></a> -->
			</div>


		</div>
	</section>

	<footer>
		<p class="copyright">
			Galeria creado por: José Andrés García Fernández.
		</p>
	</footer>

</body>
</html>