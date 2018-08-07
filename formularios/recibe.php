<?php 

	
	//print_r($_POST);
	/*
	if (!$_POST ) {
		
		header('Location: http://localhost/cursoPHP/formularios');
		
	}else{

		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		$year = $_POST['year'];
		$terminos = $_POST['terminos'];

		echo 'hola tu nombre es: '.$nombre . ' eres ' . $sexo;

	}
*/

//GET
		if (!$_GET) {
				header('Location: http://localhost/cursoPHP/formularios');
		}else{

			$nom = $_GET['nombre'];
			$sexo = $_GET['sexo'];
			$year = $_GET['year'];
			$terminos = $_GET['terminos'];

			$resultado ="";
			if ($nom) {
				$resultado.= $_GET['nombre'] . '<br>';

			}else{
				$resultado.= "el nombre no existe <br>'";
				
			}
			if ($sexo) {
				$resultado.= $_GET['sexo'] .'<br>';

			}else{
				$resultado.= "el sexo no existe '<br>'";
				
			}
			if ($year) {
				$resultado.= $_GET['year'] . '<br>';

			}else{
				$resultado.= "el year no existe '<br>'";
				
			}
			if ($terminos) {
				$resultado.= $_GET['terminos'] . '<br>';

			}else{
				$resultado.= "el terminos no existe '<br>'";
				
			}

			echo $resultado;
			
		
		}
 ?>