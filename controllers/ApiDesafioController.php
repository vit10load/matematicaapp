<?php 
	include "database.php";
	 $titulo = null;
	 $descricao = null;
	 $resposta = null;
	 $foto = null;

	if($conn==false){
		die("Erro aconteceu por conexao nao estabelecida");
	}

	if(isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['resposta']) && isset($_FILES['arquivo']) && preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $_FILES['arquivo']['type'])){

		$titulo = addslashes($_POST['titulo']);
		$descricao = addslashes($_POST['descricao']);
		$resposta = addslashes($_POST['resposta']);
		$foto = $_FILES['arquivo']['name'];
		$temp = $_FILES['arquivo']['tmp_name'];

		$uploaddir = '../imagens/';// caminho

		$uploadfile = $uploaddir . $foto;// direcionando para o caminho

		$data = $conn->query("INSERT INTO desafio_admin VALUES('','$titulo', '$descricao', '$foto','$resposta','0')");

		if ($data==true && move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)==true){

			//echo "Arquivo Enviado";
			header("Location:http://promovit.com.br/matematica/admin.php?s=1");
		}else {
			
			header("Location:http://promovit.com.br/matematica/admin.php?s=2");
		}

	}else{
		header("Location:http://promovit.com.br/matematica/admin.php?s=2");
	}

?>