<?php 

	//validacion datos GET
	//$_SERVER['REQUEST_METHOD'] comprobamos si los datos se han enviado por post o get.
  //primera forma Solo para un formulario.
	if($_SERVER['REQUEST_METHOD'] == 'GET'){

		echo "se enviaron por get";

	}else{

		echo "se enviaron por post";
	}

	//segunda forma puedes comprobar si tienes mas formularios si se han enviado y cuales con en el name de submit.
	//
	if(isset($_POST['enviar'])){
		echo "se enviaron por post";

	}
	if(isset($_GET['enviar'])){
		echo "se enviaron por get";
		print_r($_GET['enviar']);
	}
 ?>