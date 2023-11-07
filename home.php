<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="src/img/icone.png">
    <link rel="stylesheet" href="./src/style/estilo.css">
    <title>T.I Jandira/atendimento </title>

</head>

<body>

    <form class="main-login" action="/enviar_atendimento" method="POST">

        <div class="left-login">
            <h1>Área de Atendimento</h1>
            <img src="./src/img/suport.svg" alt="" class="image-login">
        </div>

        <div class="rigth-login">
            <div class="card-login">
                <h2>Olá como posso ajudar com o seu problema</h2>
                <div class="textfield">

                    <select class="opcao" id="servico" name="servico" required>
                        <option value="" disabled selected>serviços</option>
                        <option value="Suporte técnico">Troca de Toner</option>
                        <option value="Manutenção de hardware">Problema com a Conecção</option>
                        <option value="Instalação de software">Instalação de Software</option>
                        <option value="Problemas com o E-mail">Problemas com o E-mail</option>
                        <option value="Recuperação de dados">Telefone sem Serviço</option>
                        <option value="Configuração de Sistema">Configuração de Sistema</option>
                        <option value="Dificuldade com o Computador">Dificuldade com o Computador</option>
                        <option value="Problemas com o Monitor">Problemas com o Monitor</option>
                        <option value="Configuração de Sistema">ATualização de Software ou de Sistema</option>
                    </select><br><br>

                    <label for="mensagem">Detalhes sobre o Problema:</label><br>
                    <textarea class="opcao" id="mensagem" name="mensagem" rows="12" required></textarea><br><br>



                    <a class="op">Avalie nosso atendimento</a>
                    <div class="opcao">
                        <input type="radio" id="radio1" name="radio" value="opcao1">
                        <label for="radio1">Ruim</label>

                        <input type="radio" id="radio2" name="radio" value="opcao2">
                        <label for="radio2">Regular</label>

                        <input type="radio" id="radio2" name="radio" value="opcao2">
                        <label for="radio2">Bom</label>

                        <input type="radio" id="radio2" name="radio" value="opcao2">
                        <label for="radio2">Otimo</label>


                    </div>

                    <input class="btn-login" type="submit" name="acao" value="Enviar">
                    <?php
                    echo '<a  href="index.php"?logout">Sair</a>';
                    ?>



                </div>
            </div>
    </form>

</body>

</html>