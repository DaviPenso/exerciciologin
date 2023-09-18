<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
</head>
<body>
    <main class="form-signin w-50 m-auto">
    <div class="card mt-5">
        <div class="card-body shadow">    
     <form id="login-usuarios">
        <h1 class="h3 mb-3 fw-normal text-center mt-5">Exercício Login</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="Email do usuário">
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="senha" placeholder="Senha do usuário">
             <label for="senha">Senha</label>
        </div>
        <div class="text-center">
            <button class="btn btn-primary w-50 py-2 mt-4" type="submit">Acessar</button>
        </div>
        <p class="mt-5 mb-3 text-body-secondary">&copy; Davi Penso - 2023</p>

        
        <div id="userdata">
                            <?php
                            if (!empty($_SESSION['LOGADO']) && !empty($_SESSION['USER'])) {
                            ?>
                                <div class='mt-3 border-top pt-3'>
                                    <h5>Dados do usuário</h5>
                                    Nome: <?php echo $_SESSION['USER']->nome; ?> <br>
                                    Email: <?php echo $_SESSION['USER']->email; ?> <br>
                                </div>
                            <?php
                            }
                            ?>
        </div>

                        <?php
                        if (!empty($_SESSION['LOGADO']) && !empty($_SESSION['USER'])) {
                        ?>
                            <div class="mt-4">
                                <button type="button" id="btn-logout" class="btn btn-secondary">Logout</button>
                            </div>

                        <?php
                        }
                        ?>

     </form>
    </div>
    </div> 
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" 
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="    
                crossorigin="anonymous"></script>
        <script src="./scripts.js" type="text/javascript"></script>        
</body>
</html>