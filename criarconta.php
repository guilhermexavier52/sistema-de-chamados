<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="src/img/icone.png">
    <link rel="stylesheet" href="./src/style/style.css">
    <title>T.I Jandira </title>

</head>

<body>
    <form action="#" method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>CRIAR CONTA</h1>
                <img src="./src/img/cadastro.svg" alt="" class="image-login" required><br>
            </div>
            <div class="rigth-login">
                <div class="card-login">
                    <h1>CRIAR CONTA</h1>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="E-mail" placeholder="E-mail" required><br>
                    </div>
                    <div class="textfield">
                        <label for="usuario">Nome Completo</label>
                        <input type="text" name="usuario" placeholder="Nome" required><br>
                    </div>
                    <a class="op">Informe Seu Setor</a>
                    <div class="opcao">
                        <label for="setor">Setor: </label>
                        <select id="opcoes" name="opcoes" required><br>
                            <option value="opcao1">Governo</option>
                            <option value="opcao2">Juridico</option>
                            <option value="opcao3">Administração</option>
                            <option value="opcao4">Departamento Pessoal</option>
                            <option value="opcao5">Concurso</option>
                            <option value="opcao6">Ouvidoria</option>
                            <option value="opcao7">Protocolo</option>
                            <option value="opcao7">Meio Ambiente</option>
                            <option value="opcao7">Ação Social</option>
                            <option value="opcao7">Medicina do Trabalho</option>
                            <option value="opcao7">Transito</option>
                            <option value="opcao7">comunicação</option>
                            <option value="opcao7">Cadmob</option>
                            <option value="opcao7">Dafai</option>
                            <option value="opcao7">Tesouraria</option>
                            <option value="opcao7">Compras</option>
                            <option value="opcao7">Contabilidade</option>
                            <option value="opcao7">Controladoria</option>
                            <option value="opcao7">Fiscalização de Rendas</option>
                            <option value="opcao7">Fiscalização de Posturas</option>
                            <option value="opcao7">Deprocem</option>
                            <option value="opcao7">Cotação</option>
                            <option value="opcao7">habitação</option>
                            <option value="opcao7">Convenios</option>
                            <option value="opcao7">Topografia</option>
                            <option value="opcao7">Segurança Publica</option>
                            <option value="opcao7">Patrimonio</option>
                            <option value="opcao7">OOCE</option>
                        </select>
                    </div>

                    <div class="textfield">
                        <label for="text">Informe sua Função</label>
                        <input type="text" name="text" placeholder="Função" required><br>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required><br>
                    </div>
                    <div class="textfield">
                        <label for="senha">Confirme sua Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required><br>
                    </div>

                    <a class="op">Aceito e concordo criar minha conta para suporte</a>

                    <div class="opcao" required><br>
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