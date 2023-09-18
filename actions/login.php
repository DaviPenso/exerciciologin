<?php

session_start();

include "../MySQL.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $vrfEmail = new MySQL([
        "dbserver" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "login",
    ]);
    $vrfEmail->Query("SELECT * FROM usuarios WHERE email = '{$email}'");

    if ($vrfEmail->RowCount() != false) {
        $usuario = $vrfEmail->Row();

        if (!password_verify($senha, $usuario->senha)) {
            $response = [
                "code" => 500,
                "message" => "Login falhou. Verifique sua senha!"
            ];
            echo json_encode($response);
            exit;
        }

        // OK, email existe e senha esta correta
        $_SESSION['LOGADO'] = true;

        unset($usuario->senha);
        $_SESSION['USER'] = $usuario;
        $response = [
            "code" => 200,
            "message" => "Login realizado com sucesso!",
            "data" => [
                "usuario" => $usuario
            ]
        ];
        echo json_encode($response);
        exit;
    } else {
        $response = [
            "code" => 500,
            "message" => "Login falhou. Verifique seu Email!"
        ];
        echo json_encode($response);
        exit;
    }

}