<?php
session_start();

if(!isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit;
}

$logado = $_SESSION['email'];
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Meu Sistema</a>
            <div class="d-flex">
                <a href="/sistema-de-login-cadastro-php/logout.php" class="btn btn-outline-light">Sair</a>
            </div>
        </div>
    </nav>
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div class="card shadow-lg rounded-4 p-5 text-center" style="max-width: 500px;">
            <h2 class="fw-bold mb-4">Bem-vindo, <?= htmlspecialchars($logado['email']) ?>!</h2>
            <p class="text-muted mb-3">Aqui estão seus dados:</p>

            <ul class="list-group list-group-flush text-start mb-4">
                <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($logado['email']) ?></li>
                <?php if (isset($telefone['telefone'])): ?>
                    <li class="list-group-item"><strong>Telefone:</strong> <?= htmlspecialchars($telefone['telefone']) ?></li>
                <?php endif; ?>
                <?php if (isset($cep['cidade'])): ?>
                    <li class="list-group-item"><strong>Cidade:</strong> <?= htmlspecialchars($cep['cidade']) ?></li>
                <?php endif; ?>
                <?php if (isset($cidade['estado'])): ?>
                    <li class="list-group-item"><strong>Estado:</strong> <?= htmlspecialchars($cidade['estado']) ?></li>
                <?php endif; ?>
            </ul>

            <a href="/sistema-de-login-cadastro-php/sair.php" class="btn btn-danger btn-lg w-100" id="sair" >Sair</a>
        </div>
    </div>

</body>

</html>