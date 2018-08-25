<?php 

	session_start();
	//destruimos la session.
	session_destroy();

	$_SESSION= array();

	header('Location: login.php');
	die();


 ?>