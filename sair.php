<?php

    //Criar uma sessão
    session_start();

    //Destruir as variáveis da sessão
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    //Direcionamento para outra página
    header('Location: index.html');

?>