<?php 


	function comprobar_sesion(){
		if(isset($_SESSION['usuario'])){
			header('Location: index.php');

		}
	}




 ?>