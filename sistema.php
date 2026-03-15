<?php
    session_start();
    include_once('config.php');
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

    $usuario = $_SESSION['usuario'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);
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

    <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow-lg rounded-4 p-5 text-center bg-white mt-4" >
            <h2 class="fw-bold mb-4">
                Bem-vindo, <?= ($usuario['nome_completo']) ?>!
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome completo</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Cep</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . ($user_data['id']) . "</td>";
                        echo "<td>" . ($user_data['nome_completo']) . "</td>";
                        echo "<td>" . ($user_data['email']) . "</td>";
                        echo "<td>" . ($user_data['telefone']) . "</td>";
                        echo "<td>" . ($user_data['sexo']) . "</td>";
                        echo "<td>" . ($user_data['data_nascimento']) . "</td>";
                        echo "<td>" . ($user_data['cep']) . "</td>";
                        echo "<td>" . ($user_data['cidade']) . "</td>";
                        echo "<td>" . ($user_data['estado']) . "</td>";
                        echo "<td>" . ($user_data['senha']) . "</td>";
                        echo "<td> acoes </td>";
                        echo "<td><a href='editar.php?id=" . $user_data['id'] . "' class='btn btn-sm btn-primary'>Editar</a>
                        <a href='deletar.php?id=" . $user_data['id'] . "' class='btn btn-sm btn-danger'>Excluir</a>
                    </td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <a href="/sistema-de-login-cadastro-php/sair.php" class="btn btn-danger btn-lg w-100 mt-3">
                Sair
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>