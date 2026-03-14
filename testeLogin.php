<?php
    session_start();
    include_once('config.php');

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if($result && mysqli_num_rows($result) > 0){
        $usuario = mysqli_fetch_assoc($result);
        $_SESSION['usuario'] = $usuario;

        header('Location: sistema.php');
        exit;
    } else {
        $_SESSION['erro_login'] = "Email ou senha incorretos!";
        header('Location: login.php');
        exit;
    }

} else {
    $_SESSION['erro_login'] = "Preencha email e senha!";
    header('Location: login.php');
    exit;
}
?>