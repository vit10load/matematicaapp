<?php include 'controllers/ApiServiceindex.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Matematica</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      
      <link rel="stylesheet" href="css/skel-noscript.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-desktop.css" />

    </noscript>
  
  </head>
  <body class="homepage">
    <!-- Header -->
    <div id="header">

      <div class="containers1">
        
        <!-- Logo -->
        <div id="logo">
          <h1><a href="#">Matematica</a></h1>
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
    <!-- Header -->

    <!-- Banner -->
    <div id="banner">
      <div class="container">
      </div>
    </div>
    <!-- /Banner -->
    
    <!-- Main -->
    <div id="main">
      <div id="portfolio" class="container">
        <div class="row">
          <?php while($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
          <form action="index.php#teste" method="POST" class="3u">
            <section>
              <header>
                    <h2><?php echo $row['titulo'];?></h2>
              </header>
                    <a name="teste"></a>
                    <a href="#" class="image full"><img src="imagens/<?php echo $row['image']; ?>"> </a>
                    <p> <?php echo $row['descricao']; ?></p>
                    <input align="center" type="text" name="respondendo" id="resposta1">
                    
                    <button id="botao" style="height: 85px; font-family: Arial; font-size: 20px;" class="button" type="submit">Responder</button>  
            </section>
            <?php if(isset($_POST['respondendo']) && !empty($_POST['respondendo'])){ 
                    if($_POST['respondendo']==$row['resposta']){
            ?>
            <div class="button" style="display: block; background-color: green; color: white; font-size: 15px;">sucesso! Sua resposta esta correta para a questão.</div>

            <?php } else{ ?>
                
               <div class="button">resposta errada!</div>

              <?php }

                }else{
             ?>
             <?php } ?> 

          </form>
            
           <?php } ?> 
        </div>
        
        <div class="row">
            <div class="container"> 

              <h3>Informe sua solucao Clicando Na Camêra: </h3>

                <form action="controllers/ApiServiceRecebeRespostas.php" enctype="multipart/form-data" method="POST">
                  <div class="element">
                      <i class="fa fa-camera" id="iconeFile"></i><span class="name">Nenhum arquivo.</span>
                      <input id="inputs" type="file" name="arquivo" required>
                 </div>
                 <div>
                      <button id="botao" style="height: 85px; font-size: 20px;" class="button" type="submit">Enviar</button>
                 </div>

                 <?php if(isset($_GET['certo'])){ ?>
                        
                        <div style="background-color: green;" class="button">SOLUCAO ENVIADA COM SUCESSO!</div>       

                 <?php }elseif(isset($_GET['errado']) || isset($_GET['tipo'])){  ?>
                         
                         <div class="button">FALHA AO ENVIAR!</div>     

                 <?php } ?>

                 </form> 

              </div>
        
        </div>

      </div>
      <!-- Welcome -->    
      
    </div>
    <!-- /Main -->    
    
    <!-- Footer -->
    <div id="footer">
      <div class="container">
        <section>
          <header>
            <h2>Histórico de dasafios</h2>
            <span class="byline">Nesta seção do sistema voce pode ver os todos os desfios ja feitos.</span>
          </header>

          <!-- Aqui pode ser o historico -->
          <div class="row">

            <?php 
                while($linhas = $dados->fetch(PDO::FETCH_ASSOC)) {

                  if($linhas['habilita']==1){
            ?>

            <section class="4u">
              <a href="#" class="image full"><img src="imagens/<?php echo $linhas['image']; ?>" alt=""></a>
              <a href="#" class="button">Resposta <?php echo $linhas['resposta']; ?></a>
            </section>

            <?php
                  } 

                }

            ?>
            
          </div>

          <!-- end historico -->
          
        </section>
      </div>
    </div>
    <!-- /Footer -->

    <!-- Copyright -->
    <div id="copyright">
      <div class="container">
        Desenvolvido por: Vitor Oliveira Da Silva
      </div>
    </div>
  </body>
</html>