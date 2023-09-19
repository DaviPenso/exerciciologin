$(document).ready(function () {
    $('#login-usuarios').on('submit', function () {
        const email = $("#email").val();
        const senha = $("#senha").val();

        $.ajax({
            url: './actions/login.php',
            type: 'POST',
            data: {
                "email": email,
                "senha": senha
            },
            success: function (response) {
                const info = jQuery.parseJSON(response);

                if (info.code == 200) {
                    $("#userdata").html(`
                        <div class='mt-3 border-top pt-3'>
                            <h5>Dados do usuário</h5>
                            Nome: ${info.data.usuario.nome} <br>
                            Email: ${info.data.usuario.email} <br>
                        </div>
                    `);
                } else {
                    $("#userdata").html(`
                        <div class='mt-3 alert alert-danger'>
                            Erro: ${info.message}
                        </div>
                    `);
                }
            }
        });

        return false;
    });

    $("#cadastro-usuarios").on("submit", function () {
        const email = $("#email").val();
        const senha = $("#senha").val();
        const senha2 = $("#senha2").val();

        if (senha != senha2) {
            $("#mensagem").html("<div class='alert alert-danger text-center'>As senhas precisam ser idênticas!</div>");
            return false;
        }

        $.ajax({
            url: './actions/cadastro.php',
            type: 'POST',
            data: {
                "email": email,
                "senha": senha
            },
            success: function (response) {
                const info = jQuery.parseJSON(response);

                if (info.code == 200) {
                    $("#mensagem").html(`
                        <div class='mt-3 alert alert-success'>
                            ${info.message}
                        </div>
                    `);
                } else {
                    $("#mensagem").html(`
                        <div class='mt-3 alert alert-danger'>
                            Erro: ${info.message}
                        </div>
                    `);
                }
            }
        });

        return false;
    });
});
