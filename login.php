<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" defer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <title>Login</title>
</head>

<body class="bg-light">


    <div class="container min-vh-100 d-flex align-items-center">

        <div class="row w-100 bg-white shadow rounded overflow-hidden">
            <div class="col-12 col-md-6 p-0" style="max-height:500px;">
                <img src="/sistema-de-login-cadastro-php/views/assets/img/pexels-atelier-moss-2152632667-32303141.jpg"
                    class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="mb-4">Entrar</h3>
                <form action="testeLogin.php" method="POST">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <input type="password" class="form-control mb-3" placeholder="Senha">
                    <input type="submit" class="btn btn-primary w-100" value="Enviar" name="submit">
                </form>
                <a class="my-2 link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/sistema-de-login-cadastro-php/cadastro.php"> <small>Cadastrar</small> </a>

            </div>

        </div>

    </div>
</body>

</html>