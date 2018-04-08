<?php 
	session_start();
	session_destroy();
	header("Location:http://promovit.com.br/matematica/login.php");
?>