<?php

if (isset($_POST['submit'])) {
    include_once('config.php');
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
    $result = mysqli_query($conexao, "INSERT INTO usuario(nome_completo, email, telefone, sexo, data_nascimento, cep, cidade, estado) VALUES ('$nome','$email','$telefone','sexo','data','cep','endereco','cidade','estado')");
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sistema-de-login-cadastro-php/views/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" defer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <title>Login</title>
</head>

<body class="bg-light">


    <div class="container min-vh-100 d-flex align-items-center">

        <div class="row w-100 bg-white shadow rounded overflow-hidden ">
            <div class="col-12 col-lg-6 p-0 order-1 order-lg-0 img-central">
                <img src="/sistema-de-login-cadastro-php/views/assets/img/pexels-chinar-minar-1265133847-29727067.jpg"
                    class="img-fluid ">
            </div>
            <div class="col-12 col-lg-6 order-0 orden-lg-1 p-5 d-flex flex-column justify-content-center">
                <h3 class="mb-4">Cadastre-se</h3>
                <div class="d-flex my-2 ">
                    <p class="text-secondary me-1">Já tem uma conta?</p>
                    <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/sistema-de-login-cadastro-php/login.php"> <small>Entrar</small> </a>
                </div>
                <form action="cadastro.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nome"
                        placeholder="Nome completo" required>
                    <input type="email" class="form-control mb-3"
                        placeholder="Email" name="email" required>
                    <input type="tel" name="telefone" class="form-control mb-3"
                        placeholder="Telefone">
                    <div class="mb-3">
                        <label class="form-label">Informe o seu Sexo</label>
                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="sexo"
                                id="feminino"
                                value="feminino" required>
                            <label class="form-check-label" for="feminino">
                                Feminino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="sexo"
                                id="masculino"
                                value="masculino">
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                    </div>
                    <input type="date" class="form-control mb-3" name="data" required>
                    <input type="text" class="form-control mb-3" name="cep"
                        placeholder="CEP">
                    <input type="text" name="endereco" class="form-control mb-3"
                        placeholder="Endereço">
                    <input type="text" name="cidade" class="form-control mb-3"
                        placeholder="Cidade">
                    <input type="text" name="estado" class="form-control mb-3"
                        placeholder="Estado">
                    <input type="password" name="senha" class="form-control mb-3"
                        placeholder="Senha" required>
                    <button type="submit" name="submit" class="btn btn-primary w-100">
                        Cadastrar
                    </button>

                </form>

            </div>

        </div>

    </div>
</body>

</html>