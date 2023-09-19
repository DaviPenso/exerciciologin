<?php

include "../MySQL.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn = [
        "dbserver" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "login",
    ];

    /* Verifica se o email ja existe antes de efetuar o cadastro */
    $vrfEmail = new MySQL($conn);
    $vrfEmail->Query("SELECT * FROM usuarios WHERE email = '{$email}'");
    if ($vrfEmail->RowCount() != false) { // O email ja existe
        $response = [
            "code" => 500,
            "message" => "O email informado já existe.",
        ];
        echo json_encode($response);
        exit;
    }

    /* Criptografa a senha */
    $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

    $values['email'] = MySQL::SQLValue($email);
    $values['senha'] = MySQL::SQLValue($senhaCriptografada);

    $add = new MySQL($conn);
    $addResult = $add->InsertRow("usuarios", $values);

    if (!$addResult) {
        $response = [
            "code" => 500,
            "message" => "Erro no cadastro ({$add->Error()}).",
        ];
        echo json_encode($response);
        exit;
    }

    $response = [
        "code" => 200,
        "message" => "Cadastro realizado com sucesso!",
    ];
    echo json_encode($response);
    exit;
}