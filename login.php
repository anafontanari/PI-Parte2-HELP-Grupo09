<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Exclusivo para Internet Explorer-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--DEfinido para abrir e se ajustar corretamente em telas de celular-->
    <link href="style.css" rel="stylesheet" />
    <script src="senha.js"></script>
    <title>HELP - Login</title>
  </head>

  <body>
    <div class="container">
      <iframe src="header.html"></iframe>
      
      <div class="center">
        <h1><b>Sign In</b></h1>
      </div>
      
      <!--VERIFICAR A ACTION E O METHOD DESSE FORM-->
      <form action="entrar.php" method="post">
        <div class="date">
          <label for="username">Login:</label>
          <input type="email" id="username" name="email" placeholder="email@endereço.com"><br>

          <label for="senha">Senha:</label>
          <div class="password">
            <input type="password" id="senha" name="senha">
            <button type="button" id="mostrar-senha" onclick="mostrarSenha()">Exibir</button>
          </div>
          <p>Informar senha com 8 caracteres.</p><br><br>
          
          <input type="submit" name="submit" value="Entrar">
        </div>
      </form>

      <div class="button-center">
        <button class="purple-button" id="ligthColor"><a href="index.html">Voltar</a></button>
        <button onclick="mostrarPopUp()" class="purple-button">Esqueceu a senha?</button>
      </div>
      
      <iframe src="footer.html"></iframe>
      
    </div>

  </body>
</html>