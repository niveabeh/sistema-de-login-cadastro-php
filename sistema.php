<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Meu Sistema</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-outline-light">Sair</a>
            </div>
        </div>
    </nav>

    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div class="card shadow-lg rounded-4 p-5 text-center" style="max-width: 500px;">
            <h2 class="fw-bold mb-4">Bem-vindo, <?= htmlspecialchars($usuario['nome_completo']) ?>!</h2>
            <ul class="list-group list-group-flush text-start mb-4">
                <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($usuario['email']) ?></li>
                <?php if (!empty($usuario['telefone'])): ?>
                    <li class="list-group-item"><strong>Telefone:</strong> <?= htmlspecialchars($usuario['telefone']) ?></li>
                <?php endif; ?>
                <?php if (!empty($usuario['cidade'])): ?>
                    <li class="list-group-item"><strong>Cidade:</strong> <?= htmlspecialchars($usuario['cidade']) ?></li>
                <?php endif; ?>
                <?php if (!empty($usuario['estado'])): ?>
                    <li class="list-group-item"><strong>Estado:</strong> <?= htmlspecialchars($usuario['estado']) ?></li>
                <?php endif; ?>
            </ul>
            <a href="/sistema-de-login-cadastro-php/sair.php" class="btn btn-danger btn-lg w-100">Sair</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>