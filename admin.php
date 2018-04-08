<?php 
    session_start();

    if(!isset($_SESSION['usuario']) and !isset($_SESSION['password']) ){
      session_destroy();

      header("Location:http://promovit.com.br/matematica/login.php");

      exit; 
  }else{

      $name = $_SESSION['usuario'];
  }

  include 'controllers/ApiServiceAdmin.php';
?>

<!DOCTYPE html>
<html>
<title>Matematica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/init.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {
  font-family: "Open Sans", sans-serif
}
p{
  text-align: justify;
  font-size: 15px;
  position: relative;
}

textarea{
  width: 100%;
}

input{
  width: 100%;
}

.element {
  display: inline-flex;
  align-items: center;
}
i.fa-camera {
  margin: 10px;
  cursor: pointer;
  font-size: 30px;
}
i:hover {
  opacity: 0.6;
}
#inputs {
  display: none;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Matematica</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <!-- Algumas outras coisas aqui! -->

      <a href="/respostasalunos.php" class="w3-bar-item w3-button">Respostas | Alunos</a>
      
    </div>
  </div>
  <a href="controllers/logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <!-- Imagem perfil -->
    SAIR
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="/respostasalunos.php" class="w3-bar-item w3-button w3-padding-large">Ver Respostas!</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Meu Perfil</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Meu Perfil</h4>
         <p class="w3-center"><img src="imagens/ifms.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Coxim, MS</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Instituto Federal Campus, IFMS</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Meus Grupos</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Todos os grupos...</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Meus Eventos</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>some events here..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Minhas Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
        
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
   
    <div class="w3-col m7">
     <form action="controllers/ApiDesafioController.php" method="POST" enctype="multipart/form-data" >
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Formulario</h6>
              <div>
                <label>Titulo</label>
              </div>
              <div>
                <input type="text" name="titulo" placeholder="informe um titulo" required="required" pattern="[a-z\s 0-9]+$">
              </div>
              <div>
                <label>Descricao</label>
              </div>
              <div>
              		<textarea type="text" class="w3-border w3-padding" name="descricao" placeholder="informe a descrição" required="required" pattern="[a-z\s 0-9]+$" ></textarea> 
              </div>
              <div>
                <label>Melhor resposta</label>
              </div>
              <div>
              		<input type="text"  class="w3-border w3-padding" name="resposta" placeholder="melhor resposta" required="required">
              </div>
             <div class="element">
                  <i class="fa fa-camera" id="iconeFile"></i><span class="name">Nenhum arquivo.</span>
                  <input id="inputs" type="file" name="arquivo" required>
			       </div>
              <div>
                <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Postar</button> 
                <?php 
                      // Imprime estatus de postagem caso seja 1
                  if(isset($_GET['s'])){
                      if($_GET['s']==1){
                ?>
                    <div class="alert alert-success">
                          Registro salvo Com Sucesso!
                    </div>

                <?php 
                        }
                      }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      <!-- MAin de posts -->
        <!-- Imagem do problema -->
          <?php while($row = $data->fetch(PDO::FETCH_ASSOC)) {  ?>
          <div class="w3-container w3-card w3-white w3-round w3-margin" id="repetirForm">  
          <form action="controllers/ApiServiceDelete.php" method="POST"> 
            <img src="imagens/<?php echo $row['image']; ?>" class="w3-half" style="width:200px; height: 200px;">
            <!-- and Image -->
                <div id="divs">
                     <p><?php echo $row['descricao']; ?></p>
                     <input type="hidden" name="pegandoIdentificacao" value="<?php echo $row['id']; ?>">
                 </div> 
                <button name="deletar" type="submit" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>Deletar</button> 
                <button name="habilitar" type="submit" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>Postar|Historico</button>
        </form>
        </div>
        <?php } ?>
          <!-- Passar controller responsavel por comunicar com banco -->    
     
      <!-- endposts --> 
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Próximos eventos:</p>
          <!--<img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">-->
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Solicitação de amizade!</p>
          <!--<img src="/w3images/avatar6.png" alt="Avatar" style="width:50%">--> <br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
    <footer class="w3-container w3-theme-d3 w3-padding-16">
      
    </footer>

    <footer class="w3-container w3-theme-d5">
      <p style="text-align: center;">Desenvolvido por: Vitor OLiveira Da Silva</p>
    </footer>

</body>
</html> 