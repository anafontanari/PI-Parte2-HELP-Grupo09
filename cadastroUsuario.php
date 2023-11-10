<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Exclusivo para Internet Explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--DEfinido para abrir e se ajustar corretamente em telas de celular-->
        <link href = "style.css" rel = "stylesheet" />
        <title>HELP - Cadastro Usuario</title>
    </head>

    <body>

        <div class="container">
            <iframe src="header.html"></iframe>

            <div class="center">
                <h1><b>Cadastro do Usuário</b></h1>
            </div>

             <!--INÍCIO DA CONSTRUÇÃO DO FORMULÁRIO DE CADASTRO-->
            <form method="post" action="cadastroUsuario.php">
                <div class="date">

                    <label for="nome">Digite seu nome completo:</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome completo"><br>

                    <label for="email">Digite seu endereço de e-mail:</label>
                    <input type="email" id="email" name="email" placeholder="email@endereço.com"><br>

                    <label for="senha">Digite uma senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="********">
                    <p>Informar senha com 8 caracteres.</p><br>

                    <label for="telefone">Digite o número do seu celular:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(__) _____-____"><br><br>

                    <h2>Escolha o tipo de usuário que deseja cadastrar</h2><br>
                    <div class="centerSelect">   
                        <input type="radio" id="contratante" name="usuario" value="contratante">Contratante
                        <input type="radio" id="acompanhante" name="usuario" value="acompanhante">Acompanhante
                    </div>
                    
                    <input type="submit" id="cadastroUsuario" name="submit" value="Cadastrar">
                </div>
            </form>
            
            <iframe src="footer.html"></iframe>

        </div>

        <!--CONFIGURAÇÕES DO PHP-->
        <?php

            if(isset($_POST['submit'])){
                include_once('conectar.php');

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $telefone = $_POST['telefone'];
                $cliente = $_POST['usuario'];

                $cadastroUsuario = mysqli_query($conexao, "INSERT INTO cadastro_usuario(nome, 
                email, senha, telefone, usuario) VALUES('$nome','$email','$senha','$telefone','$cliente')");

                header('Location:login.php');
            }
        ?>
    </body>
</html>