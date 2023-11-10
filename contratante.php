<!--Configurações do php-->

<?php
    //Iniciar uma sessão
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
      //Destruir as variáveis
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php'); //Retorna para a pg de login
    }
    else{
      //Criar uma variável de acesso
      $logado = $_SESSION['email'];

    }
?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Exclusivo para Internet Explorer-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--DEfinido para abrir e se ajustar corretamente em telas de celular-->
    <link href="style.css" rel="stylesheet" />
    <title>HELP - Contratante</title>
  </head>
  
    <body>
      <div class="containercliente">
      
        <header>
          <div class="iconecliente">
            <div class="logo">
              <img src="./imagens/icone login.png" alt="">
            </div>
          </div>
          <div class="contacli">
            <?php
              echo "<h2>$logado</h2>";
            ?>
            <p>Seja bem-vindo(a)!!!</p><br>
          </div>
        </header>
    
        <div class="dados">
          <div class="line"></div>
          <div class="secCliente" id="1">
            <img src="./imagens/icon dados.png" alt="">
            <button id="black"><b>Atualizar Dados</b></button>
          </div>
          
          <div class="line"></div>
          <div class="secCliente" id="2">
            <img src="./imagens/icon notification.png" alt="">
            <button id="black"><b>Notificações</b></button>
          </div>
          
          <div class="line"></div>
          <div class="secCliente" id="3">
            <img src="./imagens/icon config.png" alt="">
            <button id="black"><b>Configurações</b></button>
          </div>
          
          <div class="line"></div>
          <div class="secCliente" id="4">
            <img src="./imagens/icon person.jpeg" alt="">
            <p><b>Contratar Acompanhante</b></p>
          </div>
        
        </div>
          
           
        <div class="Contratar">
          <div><img src="./imagens/icon gps2.png" alt=""><a href="">Localização</a></div>
          <div><img src="./imagens/icon favorite2.png" alt=""><a href="" role="favoritos">Favoritos</a></div>
          <div><img src="./imagens/icon avalible.png" alt=""><a href="" role="avaliações">Avaliações</a></div>
        </div>
        
        <div class="button-group">
          <button class="purple-button" id="ligthColor"><a href="sair.php"><img src="./imagens/logaut.png" height ="15" width="20"/>Sair</a></button>
          <button class="purple-button">Alterar Senha</button>
        </div>
          
        <iframe src="footer.html"></iframe>
      </div>
  </body>

</html>