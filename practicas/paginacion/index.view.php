<!DOCTYPE html>
<html>
<head>
	<title>Paginacion</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.-' . $articulo['articulo']?></li>
				<?php endforeach ?>
			</ul>
		</section>
		<section class="paginacion">
			<ul>

				<!-- Establecemos el boton de anterior desabilitado -->
				<?php if ($pagina == 1): ?>
					<li class="disabled"">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina -1 ?>">&laquo;</a></li>

				<?php endif; ?>


				<?php 
					//ciclo para mostrar las paginas.
					for ($i=1; $i <= $numeropaginas; $i++) { 
							
						if($pagina == $i){
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						}else{
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}

					}

				 ?>
				 <!-- Establecemos el boton de posterior desabilitado -->
				 <?php if ($pagina == $numeropaginas): ?>
					<li class="disabled"">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina +1 ?>">&raquo;</a></li>

				<?php endif; ?>


				<!--
				<li class="disabled"">&laquo;</li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">&raquo;</a></li>-->
			</ul>
		</section>
	</div>

</body>
</html>