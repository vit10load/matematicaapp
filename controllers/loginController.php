<?php 
	
	include 'database.php';

	$resultadoConsulta = null;

	session_start();

	try{
		if(isset($_POST['username']) && isset($_POST['pass']) && $_POST['remenberToken'] == 'f7j20sm7vaQ*P88?<>'){

			$user = addslashes($_POST['username']);
			$pass = addslashes($_POST['pass']);
			$novoPassword = md5($pass);

			$data = $conn->query("SELECT * FROM `user_admin` WHERE pass_user = '$novoPassword'");

		}else{
			session_destroy();
			header("Location:http://promovit.com.br/matematica/login.php");
		}	

		$resultadoConsulta = $data->fetch(PDO::FETCH_ASSOC);

		if($resultadoConsulta!= null && $resultadoConsulta['pass_user']==$novoPassword){

			$_SESSION['usuario'] = $resultadoConsulta['name_user'];
			$_SESSION['password'] = $resultadoConsulta['pass_user'];

			session_write_close();

			header("Location:http://promovit.com.br/matematica/admin.php");
		}else{
			header("Location:http://promovit.com.br/matematica/login.php");
		}
		
	}catch(PDOException $e){

		header("Location:http://promovit.com.br/matematica/login.php");

		session_destroy();
	}

?>