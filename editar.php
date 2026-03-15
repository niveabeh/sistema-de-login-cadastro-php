<?php

if (isset($_GET['id'])) {

    include_once('config.php');

    $id = $_GET['id'];


    $sqlSelect = "SELECT * FROM usuarios WHERE id =$id";

    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {


        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome_completo'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data = $user_data['data_nascimento'];
            $cep = $user_data['cep'];
            $endereco = $user_data['endereco'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $senha = $user_data['senha'];
        }
    } else {
        header('Location: sistema.php');
    }




    // $result = mysqli_query($conexao,
    //  "INSERT INTO usuarios (nome_completo, email, telefone, sexo, data_nascimento, cep, cidade, estado, senha) 
    // VALUES ('$nome','$email','$telefone','$sexo','$data','$cep','$cidade','$estado', '$senha')");
    // header('Location: login.php');
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
                <form action="saveEdit.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input type="text" class="form-control mb-3" name="nome"
                        placeholder="Nome completo" value="<?php echo $nome; ?>" required>

                    <input type="email" class="form-control mb-3"
                        placeholder="Email" name="email" value="<?php echo $email; ?>" required>

                    <input type="tel" name="telefone" class="form-control mb-3"
                        placeholder="Telefone" value="<?php echo $telefone; ?>">

                    <div class="mb-3">
                        <label class="form-label">Informe o seu Sexo</label>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="sexo"
                                id="feminino"
                                value="feminino"
                                <?php echo ($sexo == 'feminino' ? 'checked' : '') ?> required>

                            <label class="form-check-label" for="feminino">
                                Feminino
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="sexo"
                                id="masculino"
                                value="masculino"
                                <?php echo ($sexo == 'masculino' ? 'checked' : '') ?>>

                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                    </div>

                    <input type="date" class="form-control mb-3" name="data" value="<?php echo $data; ?>" required>

                    <input type="text" class="form-control mb-3" name="cep" value="<?php echo $cep; ?>"
                        placeholder="CEP">

                    <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="form-control mb-3"
                        placeholder="Endereço">

                    <input type="text" name="cidade" value="<?php echo $cidade; ?>" class="form-control mb-3"
                        placeholder="Cidade">

                    <input type="text" name="estado" value="<?php echo $estado; ?>" class="form-control mb-3"
                        placeholder="Estado">

                    <input type="text" name="senha" value="<?php echo $senha; ?>" class="form-control mb-3"
                        placeholder="Senha" required>

                    <button type="submit" name="update" id="update" class="btn btn-primary w-100">
                        Cadastrar
                    </button>

                </form>

            </div>

        </div>

    </div>
</body>

</html>