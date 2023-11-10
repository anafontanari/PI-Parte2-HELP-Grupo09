<?php

session_start(); // Inicia uma sessão    

// Verificar se houve uma ação dentro da página login.php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    // Campos não estão vazios

    // Conectar o banco de dados
    include_once('conectar.php');

    // Criar as variáveis de armazenamento
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar a tabela do banco de dados
    $sql = "SELECT * FROM cadastro_usuario WHERE email = '$email' AND senha = '$senha'";

    $verificar = $conexao->query($sql);

    // Verificar se o registro é válido
    if(mysqli_num_rows($verificar) < 1){ // 1 = true e 0 = false, para verificar se o cadastro existe
        // Destruir as variáveis
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location:login.php'); // Permanece na página de login
    } else{
        // Obter o tipo de usuário da consulta
        $row = $verificar->fetch_assoc();
        $usuario_usuario = $row['usuario'];

        // Criar as variáveis da sessão iniciada
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        // Redirecionar com base no tipo de usuário
        if ($usuario_usuario == 'contratante') {
            header('Location:contratante.php');
        } else if ($usuario_usuario == 'acompanhante') {
            header('Location:acompanhante.php');
        }
    }
} else{
    // Campos estão vazios
    header('Location:login.php');
}
?>
