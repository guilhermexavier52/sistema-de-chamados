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
    <form action="#" method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>BEM VINDO <br>VOCÊ ESQUECEU SUA SENHA?</h1>
                <img src="./src/img/undraw_online_stats_0g94.svg" alt="" class="image-login">
            </div>
            <div class="rigth-login">

                <div class="card-login">

                    <h1>REDEFENIR SENHA</h1>
                    <div class="textfield">
                        <label for="usuario">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" required><br>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required><br>
                    </div>

                    <div class="textfield">
                        <label for="senha">Confirme Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required><br>
                    </div>

                    <a class="op">Concorda com sua Senha</a>

                    <div class="opcao">
                        <input type="radio" id="radio1" name="radio" value="opcao1">
                        <label for="radio1">Sim</label>

                        <input type="radio" id="radio2" name="radio" value="opcao2">
                        <label for="radio2">Não</label>
                    </div>



                    <input class="btn-login" type="submit" value="Enviar">
    </form>

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
</body>

</html>