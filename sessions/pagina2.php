<?php 
//pagina privada.

	session_start();
	if($_SESSION){
		$nombre = $_SESSION['nombre'];
		echo '<h1>hola,'. $nombre .'</h1>';
		//print_r($_SESSION);
	}else{
		echo 'no has iniciado sesion';
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Pagina 2
	</title>
</head>
<body>

	<h1>Hola, <?php echo $_SESSION['nombre']; ?></h1>
	<a href="cerrar.php">Cerrar sesion</a>
</body>
</html>