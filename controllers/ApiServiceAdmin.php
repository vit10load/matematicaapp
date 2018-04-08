<?php 
	include "database.php";
	if($conn==false){ 
		die("Connection failed here...");// caso ocorreu alguma falha
	} else{ 
		$data = $conn->query("SELECT * FROM `desafio_admin`");
	}	
?>