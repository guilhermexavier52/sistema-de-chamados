
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="src/img/icone.png">
    <link rel="stylesheet" href="./src/style/style.css">
    <title>T.I Jandira </title>

</head>

<body>

<tbody>



</tbody>
    <form method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>BEM VINDO <br> AO SEU SUPORTE T.I</h1>
                <img src="./src/img/codeInJS.svg" alt="" class="image-login">
            </div>
            <div class="rigth-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="email" name="login" placeholder="E-mail" required><br>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required><br>
                    </div>


                    <input class="btn-login" type="submit" name="acao" value="Enviar">

    </form>

    <div class="suporte">
        <a href="criarconta.php" style="color: #000">Criar conta &nbsp;&nbsp;&nbsp;</a>

        <a href="recuperarsenha.php" style="color: #000">&nbsp;&nbsp;&nbsp; Esqueci Minha Senha</a>

        <script>
            const form = document.querySelector('form');
            const successMessage = document.getElementById('success-message');

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                successMessage.style.display = 'block';
                form.reset();
            });
        </script>
    </div>
    </div>
    </div>

    </div>
</body>

</html>