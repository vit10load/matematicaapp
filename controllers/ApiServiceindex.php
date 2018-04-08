<?php 
	include "database.php";
	$men = null;// concatenar mensagem

	if($conn==false){ 

		die("Connection failed here...");// caso ocorreu alguma falha

	} else{ 
		$data = $conn->query("SELECT * FROM `desafio_admin`");
		$dados = $conn->query("SELECT * FROM `desafio_admin`");
	}	
?>