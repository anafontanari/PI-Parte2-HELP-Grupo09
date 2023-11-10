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
    <title>HELP - Acompanhante</title>
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
            <img src="./imagens/gerenciar.png" alt="">
            <button id="black"><b>Gerenciar Solicitações de Contratação</b></button>
            <br><br>
          </div>
            
        </div>
        
        <div class="button-group">
          <button class="purple-button" id="ligthColor"><a href="sair.php"><img src="./imagens/logaut.png" height ="15" width="20"/>Sair</a></button>
          <button class="purple-button">Alterar senha</button>
        </div>
          
        <iframe src="footer.html"></iframe>
      </div>
  </body>

</html>