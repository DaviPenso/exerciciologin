<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="d-flex align-items-center justify-content-center mt-4">
            <a href="./index.php" class="me-3 btn btn-primary">Login</a>
            <a href="./cadastro.php" class="btn btn-secondary">Cadastro</a>
        </div>
    </header>
    <main class="form-signin w-50 m-auto">
        <div class="card mt-5">
            <div class="card-body shadow">
                <form id="cadastro-usuarios">
                    <h1 class="h3 mb-3 fw-normal text-center mt-5">Exercício Login</h1>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Informe seu email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control form-control-lg" id="senha" placeholder="Informe uma senha">
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha2">Repita sua senha</label>
                        <input type="password" class="form-control form-control-lg" id="senha2" placeholder="Repita sua senha">
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary py-2 mt-4" type="submit">Cadastrar</button>
                    </div>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; Davi Penso - 2023</p>

                    <div id="mensagem"></div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts.js" type="text/javascript"></script>
</body>

</html>