<!DOCTYPE HTML>
<html>
<head>
	<title>Matematica</title>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>

    <noscript>
      <link rel="stylesheet" href="css/skel-noscript.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-desktop.css" />
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    </noscript>
    <!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="csslogin/util.css">
	<link rel="stylesheet" type="text/css" href="csslogin/main.css">
</head>
<body class="homepage">

<!-- MUDEI AQUI -->
<div id="header">
      <div class="containers1">
        <!-- Logo -->
        <div id="logo">
          <h1><a href="#" style="font-size: 25px;">Matematica</a></h1>
        </div>
        
        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#">Historico</a></li>
            <li><a href="login.php">Admin</a></li>
          </ul>
        </nav>

      </div>
 </div>
 <!-- MUDEI AQUI -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="controllers/loginController.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Usuario é Obrigatorio">
						<span class="label-input100">Usuario:</span>
						<!-- userame -->
						<input class="input100" type="text" name="username" placeholder="Coloque seu usuario">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Senha Obrigatoria">
						<span class="label-input100">Senha:</span>
						
						<!--  pass -->

						<input class="input100" type="password" name="pass" placeholder="Coloque sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Codigo Obrigatorio">
						<span class="label-input100">Codigo de acesso:</span>
						
						<!--  code -->

						<input class="input100" type="password" name="remenberToken" placeholder="Coloque seu codigo">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>	

					
					<!-- Link de reset a definir -->
					<div class="text-right p-t-8 p-b-31">
						<a href="#" style="color:black;">
							Esqueceu Senha?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Logar
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Ou Use
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="jslogin/main.js"></script>

	<div id="copyright">
      <div class="container" style="font-size: 20px;">
        Desenvolvido por: Vitor Oliveira Da Silva
      </div>
    </div>
</body>
</html>