<?php require 'views/header.php'; ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><a href="single.php">Titulo Del Articulo</a></h2>
				<p class="fecha">12/15/4144</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA;?>/imagenes/1.png" alt="placeholder+image">
					</a>
				</div>
				<p class="extracto">Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</p>
				<a href="#" class="continuar">Continuar leyendo</a>
			</article>
		</div>
		<div class="post">
			<article>
				<h2 class="titulo"><a href="">Titulo Del Articulo</a></h2>
				<p class="fecha">12/15/4144</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA;?>/imagenes/1.png" alt="placeholder+image">
					</a>
				</div>
				<p class="extracto">Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</p>
				<a href="#" class="continuar">Continuar leyendo</a>
			</article>
		</div>

		<?php require 'paginacion.php'; ?>
		
	</div>
	<?php require 'views/footer.php'; ?>
</body>
</html>