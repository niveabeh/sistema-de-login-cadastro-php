<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM  usuarios WHERE email = '$email' AND senha = '$senha' ";

        $result = $conexao->query($sql);
    }else{
        header('Location: login.php');
        // para caso  nao existir a variavel, retornar a página login
    }


?>