<?php 

	if ($_POST){
		echo $_POST['nombre'];
	}/*else{
		echo "introduce un nombre";
	}*/



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<!--Action donde quieres recivir los datos, si los errores quieres mostrarlos antes de enviarlos, puedes poner action vacio para mostarlos en la misma pagina.
		La variable POST se crea cuando le damos al submit, por lo tanto si abrimos la otra pagina no cargará los datos.
		Además por post podemos enviar archivos.Informacion importante. action="recibe.php"

		<?php echo $_SERVER['PHP_SELF']; ?>
		Nos va a devolver la ruta del archivo y la ruta del script que estamos ejecutando actualmente.
		Pero tiene un fallo de seguridad.
		resolvemos con un htmlspecialchars.

	-->
	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" placeholder="Nombre: " name="nombre" id="">
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<br>
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>
		<!-- name accedemos a ellos mediante php-->
		<!-- 	-->
		<select name="year" id="year">
			<?php 
				$año = 1900;

				for ($i=2000; $i >=1900 ; $i--) { 
					echo '<option value="'.$i.'">'.$i.'</option>';
				}

			 ?>

		</select>
		<br>
		<label for="terminos">Acpetar Terminos</label>
		<input type="checkbox" name="terminos" value="ok" id="terminos">

		<input type="submit" value="Enviar">
	</form>


</body>
</html>