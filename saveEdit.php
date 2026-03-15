<?php
    include_once('config.php');

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data = $_POST['data'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $senha = $_POST['senha'];
        $sqlUpdate = "UPDATE  usuarios SET  nome_completo = '$nome', email = '$email', telefone = '$telefone', sexo = '$sexo', data_nascimento = '$data', cep = '$cep', endereco='$endereco', cidade = '$cidade', estado = '$estado', senha = '$senha' WHERE id='$id'";
    
        $result = $conexao->query($sqlUpdate);
    }
    header("Location: sistema.php");

    

    

?>