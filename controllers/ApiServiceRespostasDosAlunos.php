<?php 
	include 'database.php';
	$contarIndiceSlide = 0;
	if($conn==true){
		$data = $conn->query("SELECT * FROM `respostas_alunos`");
	}else{
		// try here...
	}
?>