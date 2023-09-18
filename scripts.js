$(document).ready(function () {
    $('#login-usuarios').on('submit', function () {
        $.ajax({
            url: './actions/login.php',
            type: 'POST',
            data: $(this).serialize(),
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
    })});