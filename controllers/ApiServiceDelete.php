<?php 
	include 'database.php';

	$idDaQuestao = null;

	if(!empty($_POST['pegandoIdentificacao']) && isset($_POST['deletar']) && $conn!=false){

		$idDaQuestao = addslashes($_POST['pegandoIdentificacao']);

		$data = $conn->query("DELETE  FROM `desafio_admin` WHERE id= '$idDaQuestao'");

		if($data==true){

			header("Location:http://promovit.com.br/matematica/admin.php?c=1");	
		}else{

			header("Location:http://promovit.com.br/matematica/admin.php?c=2");	
		}	

	}elseif(isset($_POST['habilitar']) && $conn!=false && isset($_POST['pegandoIdentificacao'])){

		$idDaQuestao = addslashes($_POST['pegandoIdentificacao']);

		$resultadoQueryHabilitar = $conn->query("UPDATE `desafio_admin` SET habilita = '1' WHERE id = '$idDaQuestao'");

		if($resultadoQueryHabilitar==true){

			header("Location:http://promovit.com.br/matematica/admin.php?c=1");

		}else{

			header("Location:http://promovit.com.br/matematica/admin.php?c=2");
		}

	}

?>