<?php 
	include 'database.php';

	if(preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $_FILES['arquivo']['type']) && $conn==true){

		$foto = $_FILES['arquivo']['name'];
		$temp = $_FILES['arquivo']['tmp_name'];

		$uploaddir = '../imagens/';// caminho que a imagem vai ser salva no servidor

		$uploadfile = $uploaddir . $foto;// nome do arquivo.

		$data = $conn->query("INSERT INTO respostas_alunos VALUES('','$foto')");

		if ($data==true && move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)==true){

			//echo "Arquivo Enviado";
			header("Location:http://promovit.com.br/matematica/index.php?certo");
		}else {
			
			header("Location:http://promovit.com.br/matematica/index.php?errado");
		}

	}else{
		header("Location:http://promovit.com.br/matematica/index.php?tipo=errado");
	}


?>